@extends('layouts.admin')

@section('title', 'View User')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with the input <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="/adminupdate/{{ $users->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- CARD START -->
            <div id="card-whole" class="card card-custom">
                    <!-- <h4>User Details</h4> -->
                <div class="card-header">
                    <h4 id="User-card-header">User Details</h4>
                </div>
    
                <div id="card-body" class="card-body">
                    <h5 id="card-title" class="card-title">User Name: {{ $users->name }}</h5>
                    <hr>
                    <p id="card-text" class="pl-3"><strong>User Organization: {{ $users->organization }}</strong> </p>
                    <hr>
                    <p class="pl-3"><strong>User Name:</strong> {{ $users->name }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Email:</strong> {{ $users->email }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Organization:</strong> {{ $users->organization }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Role:</strong> {{ $users->roles }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Student Number:</strong> {{ $users->student_number }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Email Verification:</strong> {{ $users->email_verified_at }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Account Created:</strong> {{ $users->created_at }}</p>
                    <hr>
                    <p class="pl-3"><strong>User Account Updated:</strong> {{ $users->updated_at }}</p>
                    <hr>
                    <button class="btn btn-warning">
                        <a href="{{ route('adminupload') }}">Back</a>
                    </button>
                </div>
                <!-- CARD FOOTER -->
                <div id="card-footer" class="card-footer">
                    <small id="card-footer-text" class="text-muted">Last Updated: {{ $users->updated_at }}</small>
                </div>
            </div>
            <!-- CARD ENDING -->
        </div>
    </div>
</form>

@endsection
