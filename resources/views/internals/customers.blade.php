@extends('layout')

@section('title', 'Customers list')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="customers" method="post">

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
                    <label for="active">Customer status</label>
                    <select id="active" name="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div>
                    {{ $errors->first('active') }}
                </div>
                <button class="btn btn-primary" type="submit">Add customer</button>

                @csrf
            </form>
            <hr>
        </div>
    </div>



<div class="row">
    <div class="col-6">
        <h3>Active customers</h3>
        <ul>
            @foreach($activeCustomers as $activeCustomer)
                <li>{{ $activeCustomer->name }}  <span class="text-muted">({{ $activeCustomer->email }})</span></li>
            @endforeach
        </ul>
    </div>

        <div class="col-6">
            <h3>Inactive customers</h3>
            <ul>
                @foreach($inactiveCustomers as $inactiveCustomer)
                    <li>{{ $inactiveCustomer->name }}  <span class="text-muted">({{ $inactiveCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>

    @endsection