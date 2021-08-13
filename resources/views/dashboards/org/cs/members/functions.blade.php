@extends('layouts.members')

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
                            <p><strong>See Fund Collection: </strong></p> 
                            <button class="btn btn-warning">
                                <a href="{{ url('members/listoffunds') }}">View Fund Collection</a>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <p><strong>See Events: </strong></p> 
                            <button class="btn btn-warning">
                                <a href="{{ url('members/listofevents') }}">View Events</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
