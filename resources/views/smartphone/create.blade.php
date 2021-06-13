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
<form method="POST" action="{{action('App\Http\Controllers\SmartphoneController@store')}}" style="border:1px solid black; padding: 25px">
    @csrf
        <h3>SMARTPHONE</h3>
        <div class="form-group">
            <input type="text" name="smartphone_name" class="form-control" placeholder="SMARTPHONE Name">
        </div>
        <div class="form-group">
            <input type="text" name="smartphone_brand" class="form-control" placeholder="Brand">
        </div>
        <div class="form-group">
            <input type="text" name="smartphone_inv_level" class="form-control" placeholder="Inventory Level">
        </div>
        <div class="form-group">
            <input type="textarea" name="smartphone_remarks" class="form-control" placeholder="Remarks">
        </div>
        <div class="form-group">
            <input type="number" name="smartphone_price" class="form-control" placeholder="Price" step="any">
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