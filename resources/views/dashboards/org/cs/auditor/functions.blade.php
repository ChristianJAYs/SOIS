@extends('layouts.affairs')

@section('title', 'Account Functions')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, {{Auth::user()->name}} on your  {{Auth::user()->roles}} {{ __('Functions') }}</div>

                <div class="card-body">
                    You Sudent Number: {{Auth::user()->student_number}}
                    <br>
                    <hr>
                    Your role: {{Auth::user()->roles}} — hence you can:
                    <br>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <p><strong>Create Funding: </strong></p> 
                            <button class="btn btn-warning">
                                <a href="{{ url('auditorupload') }}">Create</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
