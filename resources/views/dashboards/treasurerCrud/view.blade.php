@extends('layouts.treasurer')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Crud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('treasurercreate') }}">Craete new event</a>
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
        <th>Fund Name</th>
        <th>Fund Description</th>
        <th>Fund Goal</th>
        <th>Fund Collected</th>
        <th>Fund Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($fundslist as $funds)
        <tr>
            <td>{{ $funds->fund_name }}</td>
            <td>{{ $funds->fund_description }}</td>
            <td>{{ $funds->fund_goal }}</td>
            <td>{{ $funds->fund_collected }}</td>
            <td>{{ $funds->fund_status }}</td>
            <td>
                        <a class="btn btn-info" href="{{ route('treasurershow',$funds->id) }}">SHOW</a>
                        <a class="btn btn-info" href="{{ route('treasureredit',$funds->id) }}">EDIT</a>
                    
                <form action="{{ route('treasurerdestroy',$funds->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach 
</table>
@endsection
