@extends('layouts.affairs')

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



<form action="/affairsupdate/{{ $events->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- CARD START -->
            <div id="card-whole" class="card card-custom">
                    <!-- <h4>User Details</h4> -->
                <div class="card-header">
                    <h4 id="Event-card-header">Event Details</h4>
                </div>
    
                <div id="card-body" class="card-body">
                    <h5 id="card-title" class="card-title">Event Name: {{ $events->event_name }}</h5>
                    <hr>
                    <p id="card-text" class="pl-3"><strong>Event Description: {{ $events->event_description }}</strong> </p>
                    <hr>
                    <p class="pl-3"><strong>Event Participants:</strong> {{ $events->event_participants }}</p>
                    <hr>
                    <p class="pl-3"><strong>Event Date:</strong> {{ $events->event_date }}</p>
                    <hr>
                    @if($events->event_status == '1')
                       <p id="card-text" class="card-text text-wrap"><strong>Event Status:</strong> Ongoing</p>
                    @else
                       <p id="card-text" class="card-text text-wrap"><strong>Event Status:</strong> Done</p>
                    @endif
                    <p class="pl-3"><strong>Event Creation Date:</strong> {{ $events->created_at }}</p>
                    <button class="btn btn-warning">
                        <a href="{{ route('affairsupload') }}">Back</a>
                    </button>
                </div>
                <!-- CARD FOOTER -->
                <div id="card-footer" class="card-footer">
                    <small id="card-footer-text" class="text-muted">Last Updated: {{ $events->updated_at }}</small>
                </div>
            </div>
            <!-- CARD ENDING -->
        </div>
    </div>
</form>

@endsection
