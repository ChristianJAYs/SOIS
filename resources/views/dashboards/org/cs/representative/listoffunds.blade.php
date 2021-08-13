@extends('layouts.representative')

@section('title', 'Dashboard')

@section('content')

<div>
    
    <h1 id="events-heading">List of Funding</h1>
</div>
<hr>
<button class="btn btn-warning">   
    <a href="{{ url('representative/functions') }}">BACK</a>
</button>
<hr>

<div class="container-fluid d-flex">
    <div class="row justify-content-center">
        @foreach($fundslist as $funds)
        <!-- CARD START -->
        <div id="card-whole" class="card card-custom mx-2 mb-3">
                <!-- <h4>User Details</h4> -->
            <div class="card-header">
                <h4 id="User-card-header">Funding Details</h4>
            </div>

            <div id="card-body" class="card-body">
                <h5 id="card-title" class="card-title">Fund Name: {{ $funds->fund_name }}</h5>
                <hr>
                <p class="pl-3"><strong>Fund Name:</strong> {{ $funds->fund_name }}</p>
                <hr>
                <p class="pl-3"><strong>Fund Description:</strong> {{ $funds->fund_description }}</p>
                <hr>
                <p class="pl-3"><strong>Fund Collected:</strong> {{ $funds->fund_collected }}</p>
                <hr>
                @if($funds->fund_status == '1')
                    <p id="card-text" class="card-text text-wrap"><strong>Fund Status:</strong> Ongoing</p>
                @else
                    <p id="card-text" class="card-text text-wrap"><strong>Fund Status:</strong> Done</p>
                @endif
                <hr>
                <p class="pl-3"><strong>Fund Account Created:</strong> {{ $funds->created_at }}</p>
                <hr>
                <p class="pl-3"><strong>Fund Account Updated:</strong> {{ $funds->updated_at }}</p>
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
                                <h5 class="modal-title" id="exampleModalLongTitle">Fund Name: {{ $funds->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('destroy',$funds->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" title="delete">
                                        <!-- <i class="fas fa-trash fa-lg"></i> -->
                                        <i class="fas fa-trash fa-lg"></i>
                                    </button>
                                </form>
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
                <small id="card-footer-text" class="text-muted">Last Updated: {{ $funds->updated_at }}</small>
            </div>
        </div>
        <!-- CARD ENDING -->
        @endforeach 
    </div>
</div>
@endsection
