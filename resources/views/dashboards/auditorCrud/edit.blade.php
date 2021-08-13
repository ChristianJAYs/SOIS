@extends('layouts.auditor')

@section('title', 'View')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h2>Edit Funding</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('auditorupload') }}">Back</a>
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



<form action="/auditorupdate/{{ $funds->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund name</strong>
                <input type="text" name="fund_name" value="{{$funds->fund_name}}" class="form-control" placeholder="fund_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Description</strong>
                <input type="text" name="fund_description" value="{{$funds->fund_description}}" class="form-control" placeholder="fund_description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Goal</strong>
                <input type="text" name="fund_goal" value="{{$funds->fund_goal}}" class="form-control" placeholder="fund_goal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Collected</strong>
                <input type="text" name="fund_collected" value="{{$funds->fund_collected}}" class="form-control" placeholder="fund_collected">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Status</strong>
                <input type="text" name="fund_status" value="{{$funds->fund_status}}" class="form-control" placeholder="fund_status">
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
