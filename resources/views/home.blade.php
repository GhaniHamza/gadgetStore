@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div style="text-align: center">
            <a href="staff" class="btn btn-success">Staff</a>
            <a href="smartphone" class="btn btn-success">Smartphones</a>
            <a href="case" class="btn btn-success">Smartphone Cases</a>
            <a href="powerbank" class="btn btn-success">Powerbanks</a>
            <a href="accessories" class="btn btn-success">Accessories</a>
        </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
