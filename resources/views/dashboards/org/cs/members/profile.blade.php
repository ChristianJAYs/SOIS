@extends('layouts.members')

@section('title', 'Profile')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="card-header">
                    <div id="profile-image-container">
                        <img id="profile-image" src="{{ asset('image/svg/pup.svg') }}">
                    </div>
                </div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th><strong>Name:</strong></th>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <th><strong>Student Number:</strong></th>
                            <td>{{Auth::user()->student_number}}</td>
                        </tr>
                        <tr>
                            <th><strong>Email:</strong></th>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                    </table>
                    <hr>
                    Your role: {{Auth::user()->roles}}
                    <br>
                    <hr>
                    Your Organization: {{Auth::user()->organization}}
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

@endsection
