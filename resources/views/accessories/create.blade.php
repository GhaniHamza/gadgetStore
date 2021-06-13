@extends('layouts.app')

@section('content')

@if(auth()->check())

<h1 class='text-center'>Add Data to Database</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

<div class="form-inline justify-content-center">
<form method="POST" action="{{action('App\Http\Controllers\AccessoriesController@store')}}" style="border:1px solid black; padding: 25px">
    @csrf
        <h3>Accessories</h3>
        <div class="form-group">
            <input type="text" name="accessories_name" class="form-control" placeholder="Accessories Name">
        </div>
        <div class="form-group">
            <input type="text" name="accessories_type" class="form-control" placeholder="Type">
        </div>
        <div class="form-group">
            <input type="text" name="accessories_brand" class="form-control" placeholder="Brand">
        </div>
        <div class="form-group">
            <input type="textarea" name="accessories_remarks" class="form-control" placeholder="Remarks">
        </div>
        <div class="form-group">
            <input type="number" name="accessories_price" class="form-control" placeholder="Price" step="any">
        </div>
        <div class="form-group">
            <input type="number" name="staff_id" class="form-control" placeholder="Staff ID">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary text-center">Submit</button>
        </div>
</form>
</div>


@else

{{-- invalid user will be redirect to index page --}}
<script>window.location = "/home";</script>

@endif

@endsection