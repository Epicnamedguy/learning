@extends('layouts.app')

@section('title', 'Edit details for '.$customer->name)
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Edit details for {{$customer->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer->id}}" method="post">
                @method('patch')
                @include('customers.form')
                <button class="btn btn-primary" type="submit">Save customer</button>


            </form>
            <hr>
        </div>
    </div>


@endsection