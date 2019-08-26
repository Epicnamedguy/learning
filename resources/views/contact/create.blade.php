@extends('layout')

@section('title', 'Contact us')


@section('content')

<h1>Contact us</h1>
<form action="/contact" method="post">
<div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" value="{{old('name')}}">
</div>
<div>
    {{ $errors->first('name') }}
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input class="form-control" type="email" name="email" value="{{old('email')}}">
</div>
<div>
    {{ $errors->first('email') }}
</div>

    <div class="form-group">
        <label for="message">Message:</label>
<textarea name="message" class="form-control" cols="30"  rows="10">
    {{old('message')}}
</textarea>
    </div>
    <div>
        {{ $errors->first('message') }}
    </div>
<button type="submit" class="btn btn-primary">Send</button>
    @csrf
</form>
    @endsection