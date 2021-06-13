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

<h3 style="text-align: center">Edit Staff</h3>
<br>

<form method="POST" action="{{action('App\Http\Controllers\StaffController@update', $id)}}">
    @csrf 

    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <input type="text" name="staff_name" class="form-control" value="{{$staff -> staff_name}}" placeholder="Enter Staff Name">
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