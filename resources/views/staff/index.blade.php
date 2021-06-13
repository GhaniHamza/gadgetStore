@extends('layouts.app')

@section('content')

@if(auth()->check())

<div class="row">
    <div class="col-md-12">
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif 
        <div style="text-align: left">
            <a href="smartphone" class="btn btn-success">Smartphones</a>
            <a href="case" class="btn btn-success">Smartphone Cases</a>
            <a href="powerbank" class="btn btn-success">Powerbanks</a>
            <a href="accessories" class="btn btn-success">Accessories</a>
            <a href="staff/create" class="btn btn-primary">Add Data</a>
        </div>
        <br>
        <h3 style="text-align: center">Staff Table</h3>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Staff ID</th>
                <th>Staff Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($staff as $row)
            <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['staff_name']}}</td>
                <td><a href="{{action('App\Http\Controllers\StaffController@edit', $row['id'])}}">Edit</a></td>
                <td>
                    <form method="POST" class="delete_form" action="{{action('App\Http\Controllers\StaffController@destroy', $row['id'])}}">
                        @csrf 

                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@else

{{-- invalid user will be redirect to index page --}}
<script>window.location = "/home";</script>

@endif

<script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Are you sure you want to delete?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection