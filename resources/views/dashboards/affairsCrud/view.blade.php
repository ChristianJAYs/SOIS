@extends('layouts.affairs')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Curud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('affairscreate') }}">Craete new event</a>
            </div>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Event Participant</th>
        <th>Event Date</th>
        <th>Event Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($eventlist as $event)
        <tr>
            <td>{{ $event->event_name }}</td>
            <td>{{ $event->event_description }}</td>
            <td>{{ $event->event_participants }}</td>
            <td>{{ $event->event_date }}</td>
            <td>{{ $event->event_status }}</td>
            <td>
                        <a class="btn btn-info" href="{{ route('affairsshow',$event->id) }}">SHOW</a>
                        <a class="btn btn-info" href="{{ route('affairsedit',$event->id) }}">EDIT</a>
                    
                <form action="{{ route('affairsdestroy',$event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach 
</table>



@endsection
