@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success fs-5">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <div class="col-6">
                            <b>Welcome to Bee Technology </b>
                        </div>
                        <div class="col-6">
                            <span>User Name : </span>{{ Auth::user()->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
