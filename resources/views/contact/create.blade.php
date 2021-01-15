@extends('layouts.app')

@section('content')
    <h1 style="margin-left: 186px">Contact Us</h1>
    <form action="/contact" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="">
                <lable for="name">Name</lable>
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>
            <div class="">
                <lable for="mail">Email</lable>
                <input type="text" name="email" value="{{old('email')}}" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>
            <div class="">
                <lable for="name">Message</lable>
                <textarea name="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
                <div>{{$errors->first('name')}}</div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>
@endsection