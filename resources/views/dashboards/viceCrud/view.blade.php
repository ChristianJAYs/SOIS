@extends('layouts.viceaccount')

@section('title', 'View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, {{Auth::user()->name}} on your  {{Auth::user()->roles}} {{ __('Functions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br>
                    <hr>
                    You Sudent Number: {{Auth::user()->student_number}}
                    <br>
                    <hr>
                    Your role: {{Auth::user()->roles}}
                    <br>
                    <hr>
                    Your Organization: {{Auth::user()->organization}}
                    <hr>
                    This is your: UPLOAD
                    <br>
                    <hr>
                    <a href="{{ url('viceupload') }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
