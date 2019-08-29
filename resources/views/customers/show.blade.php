@extends('layouts.app')

@section('title', 'Details for '.$customer->name)
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Details for {{$customer->name}}</h1>
            <p><a href="/customers/{{$customer->id}}/edit">Edit info for {{$customer->name}}</a></p>

            <form action="/customers/{{$customer->id}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete customer</button>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name: </strong>{{$customer->name}}</p>
            <p><strong>Email: </strong>{{$customer->email}}</p>
            <p><strong>Company: </strong>{{$customer->company->name}}</p>
        </div>
    </div>


@endsection