@extends('layouts.viceaccount')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Crud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('vicecreate') }}">Create new event</a>
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
        <th>I</th>
        <th>Id</th>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Event Participant</th>
        <th>Event Date</th>
        <th>Event Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($eventlist as $events)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $events->id }}</td>
            <td>{{ $events->event_name }}</td>
            <td>{{ $events->event_description }}</td>
            <td>{{ $events->event_participants }}</td>
            <td>{{ $events->event_date }}</td>
            <td>{{ $events->event_status }}</td>
            <td>
                       <!--  <a class="btn btn-info" href="{{ route('show',$events->id) }}">SHOW</a>
                        <a class="btn btn-info" href="{{ route('edit',$events->id) }}">EDIT</a>
                     -->
                    <a href="{{ route('viceshow', $events->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>
                    <a href="{{ route('viceedit', $events->id) }}" title="edit">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                <form action="{{ route('vicedestroy',$events->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" title="delete">
                        <!-- <i class="fas fa-trash fa-lg"></i> -->
                        <i class="fas fa-trash fa-lg"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach 
</table>

@endsection
