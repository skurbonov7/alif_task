<?php

namespace App\Console\Commands;

use App\Count;
use Illuminate\Console\Command;
use Log;

class getargument extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:argument{name}{type}';

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
/*        $name =  $this->argument('name');
        $type =  $this->argument('type');
        Log::info("name = ".$name);
        Log::info("type = ".$type);
        $line = [
            'name' => $name,
            'type' => $type
        ];
        Count::create([
            '' => '',
        ]);
        $file = fopen(base_path().'\storage\app\test.txt', 'w+');
        //dd($file);
        $f = fwrite($file, json_encode($line));
        fclose($file);*/
    }
}
