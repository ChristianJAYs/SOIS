@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div>
    
    <h1 id="events-heading">Dashboard</h1>
</div>
<hr>

<div class="container-fluid d-flex">
    <div class="row justify-content-center">
        @foreach($userslist as $user)
        <!-- CARD START -->
        <div id="card-whole" class="card card-custom mx-2 mb-3">
                <!-- <h4>User Details</h4> -->
            <div class="card-header">
                <h4 id="User-card-header">User Details</h4>
            </div>

            <div id="card-body" class="card-body">
                <h5 id="card-title" class="card-title">User Name: {{ $user->name }}</h5>
                <hr>
                <p id="card-text" class="card-text text-wrap"><strong>User Organization: {{ $user->organization }}</strong> </p>
                <hr>
                <p class="pl-3"><strong>User Name:</strong> {{ $user->name }}</p>
                <hr>
                <p class="pl-3"><strong>User Email:</strong> {{ $user->email }}</p>
                <hr>
                <p class="pl-3"><strong>User Organization:</strong> {{ $user->organization }}</p>
                <hr>
                <p class="pl-3"><strong>User Role:</strong> {{ $user->roles }}</p>
                <hr>
                <p class="pl-3"><strong>User Student Number:</strong> {{ $user->student_number }}</p>
                <hr>
                <p class="pl-3"><strong>User Email Verification:</strong> {{ $user->email_verified_at }}</p>
                <hr>
                <p class="pl-3"><strong>User Account Created:</strong> {{ $user->created_at }}</p>
                <hr>
                <p class="pl-3"><strong>User Account Updated:</strong> {{ $user->updated_at }}</p>
                <hr>
                <!-- BUTTON MODAL -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Read More
                </button>
                <!-- MODAL -->
                <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title: {{ $user->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" title="delete">
                                        <!-- <i class="fas fa-trash fa-lg"></i> -->
                                        <i class="fas fa-trash fa-lg"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- MODAL FOOTER -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD FOOTER -->
            <div id="card-footer" class="card-footer">
                <small id="card-footer-text" class="text-muted">Last Updated: {{ $user->updated_at }}</small>
            </div>
        </div>
        <!-- CARD ENDING -->
        @endforeach 
    </div>
</div>
@endsection
