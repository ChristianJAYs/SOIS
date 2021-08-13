@extends('layouts.account')

@section('title', 'View')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h2>Edit Events</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('upload') }}">Back</a>
        </div>
    </div>
</div>

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



<form action="/update/{{ $events->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Events name</strong>
                <input type="text" name="event_name" value="{{$events->event_name}}" class="form-control" placeholder="event_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Events Description</strong>
                <input type="text" name="event_description" value="{{$events->event_description}}" class="form-control" placeholder="event_description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Events Participants</strong>
                <input type="text" name="event_participants" value="{{$events->event_participants}}" class="form-control" placeholder="event_participants">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Events Date</strong>
                <input type="text" name="event_date" value="{{$events->event_date}}" class="form-control" placeholder="event_date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Events Status</strong>
                <input type="text" name="event_status" value="{{$events->event_status}}" class="form-control" placeholder="event_status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection
