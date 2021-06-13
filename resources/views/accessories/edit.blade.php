@extends('layouts.app')

@section('content')

@if(auth()->check())

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h3 style="text-align: center">Edit Accessories Inventory</h3>
<br>

<form method="POST" action="{{action('App\Http\Controllers\AccessoriesController@update', $id)}}">
    @csrf 

    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <input type="text" name="accessories_name" class="form-control" value="{{$accessories -> accessories_name}}" placeholder="Enter Accessories Name">
    </div>
    <div class="form-group">
        <input type="text" name="accessories_type" class="form-control" value="{{$accessories -> accessories_type}}" placeholder="Enter Type ">
    </div>
    <div class="form-group">
        <input type="text" name="accessories_brand" class="form-control" value="{{$accessories -> accessories_brand}}" placeholder="Enter Brand">
    </div>
    <div class="form-group">
        <input type="text" name="accessories_remarks" class="form-control" value="{{$accessories -> accessories_remarks}}" placeholder="Remarks">
    </div>
    <div class="form-group">
        <input type="text" name="accessories_price" class="form-control" value="{{$accessories -> accessories_price}}" placeholder="Enter Price">
    </div>
    <div class="form-group">
        <input type="text" name="staff_id" class="form-control" value="{{$accessories -> staff_id}}" placeholder="Enter Staff ID">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit">
    </div>
</form>

@else

{{-- invalid user will be redirect to index page --}}
<script>window.location = "/home";</script>

@endif

@endsection