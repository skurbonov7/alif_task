<?php

namespace App\Console\Commands;

use App\Mail\ContactFormMail;
use App\Order;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send{param}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $param =  $this->argument('param');
        Log::info("name = ".$param);

        $orders = Order::all();
        foreach ($orders as $order)
            if ($order->status ==  'completed')
            {
                $users = User::where('id', $order->user_id);
                Mail::to('mail@yandex.ru')->send(new ContactFormMail($users));
            }else{
                return 'Покупки не было';
            }
    }
}
