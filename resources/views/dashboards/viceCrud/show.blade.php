@extends('layouts.viceaccount')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Curud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}">Craete new event</a>
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
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Event Participant</th>
        <th>Event Date</th>
        <th>Event Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($events as $eve)
        <tr>
            <td>{{ $eve->event_name }}</td>
            <td>{{ $eve->event_description }}</td>
            <td>{{ $eve->event_participants }}</td>
            <td>{{ $eve->event_date }}</td>
            <td>{{ $eve->event_status }}</td>
            <td>
                <form action="{{ route('destroy',$eve->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('upload',$eve->id) }}">SHOW</a>
                        <a class="btn btn-info" href="{{ route('edit',$eve->id) }}">EDIT</a>
                    
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach 
</table>






@endsection
