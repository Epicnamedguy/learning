@extends('layout')

@section('title', 'Add new customer')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Add new customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="post">

                @include('customers.form')
                <button class="btn btn-primary" type="submit">Add customer</button>


            </form>
            <hr>
        </div>
    </div>


@endsection