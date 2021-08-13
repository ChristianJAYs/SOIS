@extends('layouts.viceaccount')

@section('title', 'Account Functions')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ADD NEW EVENTS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('upload') }}">BACK</a>
            </div>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>WHOOPS!</strong>There are erros <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Name</strong>
                <input type="text" name="event_name" class="form-control" placeholder="event_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Description</strong>
                <input type="text" name="event_description" class="form-control" placeholder="event_description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Participants</strong>
                <input type="text" name="event_participants" class="form-control" placeholder="event_participants">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Date</strong>
                <input type="text" name="event_date" class="form-control" placeholder="event_date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <!-- <strong>Event Status</strong> -->
                <input type="hidden" name="event_status" class="form-control" placeholder="event_status" value="1">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>


@endsection
