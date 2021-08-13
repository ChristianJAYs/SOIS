@extends('layouts.account')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Curud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}">Create new event</a>
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
                    <a href="{{ route('show', $events->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>
                    <a href="{{ route('edit', $events->id) }}" title="edit">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                <form action="{{ route('destroy',$events->id) }}" method="POST">
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

<!-- <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($eventlist as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->event_name }}</td>
            <td>{{ $value->event_description }}</td>
            <td>{{ $value->event_participants }}</td>
            <td>{{ $value->event_date }}</td>
            <td>{{ $value->event_status }}</td>

            we will also add show, edit, and delete buttons
            <td>

                delete the shark (uses the destroy method DESTROY /events/{id}
                we will add this later since its a little more complicated than the other two buttons

                show the shark (uses the show method found at GET /events/{id}
                <a class="btn btn-small btn-success" href="{{ URL::to('events/' . $value->id) }}">Show this shark</a>

                edit this shark (uses the edit method found at GET /events/{id}/edit
                <a class="btn btn-small btn-info" href="{{ URL::to('events/' . $value->id . '/edit') }}">Edit this shark</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 -->

@endsection
