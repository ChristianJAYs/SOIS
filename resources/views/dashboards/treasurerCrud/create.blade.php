@extends('layouts.treasurer')

@section('title', 'Account Functions')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ADD NEW EVENTS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('treasurerupload') }}">BACK</a>
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


<form action="{{ route('treasurerstore') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Name</strong>
                <input type="text" name="fund_name" class="form-control" placeholder="fund_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Description</strong>
                <input type="text" name="fund_description" class="form-control" placeholder="fund_description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Goal</strong>
                <input type="text" name="fund_goal" class="form-control" placeholder="fund_goal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fund Collected</strong>
                <input type="text" name="fund_collected" class="form-control" placeholder="fund_collected">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="hidden" id="fund_status" name="fund_status" value="1">
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
