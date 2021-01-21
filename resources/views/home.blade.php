@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

            @role('student')
            <div class="card mt-3">
                <div class="card-header">Home Dashboard</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        You are logged as Student
                    </div>
                </div>
            </div>
            @endrole
        </div>
    </div>
</div>
@endsection