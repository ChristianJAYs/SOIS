@extends('layouts.account')

@section('title', 'Events')

@section('content')

<div>
    
    <h1 id="events-heading">Events</h1>
</div>
<hr>

<div class="container-fluid d-flex">
    <div class="row justify-content-center">
        @foreach($eventlist as $events)
        <!-- CARD START -->
        <div id="card-whole" class="card card-custom mx-2 mb-3">
                <img id="card-img" src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/256/Netflix.png" alt="" class="card-img">
            <div id="card-body" class="card-body">
                <h5 id="card-title" class="card-title">Event Title: {{ $events->event_name }}</h5>
                <hr>
                <p id="card-text" class="card-text text-wrap"><strong>Event Description: {{ $events->event_description }}</strong> </p>
                <hr>
                @if($events->event_status == '1')
                    <p id="card-text" class="card-text text-wrap"><strong>Event Status:</strong> Ongoing</p>
                @else
                    <p id="card-text" class="card-text text-wrap"><strong>Event Status:</strong> Done</p>
                @endif
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
                                <h5 class="modal-title" id="exampleModalLongTitle">Event Title: {{ $events->event_title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid d-flex">
                                    <div class="row"  style="position: center;">
                                        <div id="image-container">  
                                            <button class="imgLink">
                                                <img id="modal-image" src="{{ asset('image/svg/csc.svg') }}">
                                            </button>
                                            <button class="imgLink">
                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                            </button>
                                            <button class="imgLink">
                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                            </button>
                                            <button class="imgLink">
                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                            </button>
                                            <button class="imgLink">
                                                <img id="modal-image" src="{{ asset('image/svg/cs.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="pl-3"><strong>Event Description:</strong> {{ $events->event_description }}</p>
                                <p class="pl-3"><strong>Event Date:</strong> {{ $events->event_date }}</p>
                                <p class="pl-3"><strong>Event Organization:</strong> {{Auth::user()->organization}}</p>
                                <p class="pl-3"><strong>Event Status:</strong> {{ $events->event_status }}</p>
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
                <small id="card-footer-text" class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <!-- CARD ENDING -->
        @endforeach 
    </div>
</div>
@endsection
