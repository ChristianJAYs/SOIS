@extends('layouts.Admin')

@section('title', 'Account Functions')

@section('content')

<div class="pull-left">
    <h2>Crud</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admincreate') }}">Create new User</a>
                <a class="btn btn-primary" href="{{ url('admin/functions') }}">BACK</a>
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
        <th>Id</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Oraganization</th>
        <th>User Role</th>
        <th>User Student Number</th>
        <th>User Email Verified Date</th>
        <th>User Account Creation Date</th>
        <th>User Account Latest Updat</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($userslist as $users)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->organization }}</td>
            <td>{{ $users->roles }}</td>
            <td>{{ $users->student_number }}</td>
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->created_at }}</td>
            <td>{{ $users->updated_at }}</td>
            <td>
                       <!--  <a class="btn btn-info" href="{{ route('show',$users->id) }}">SHOW</a>
                        <a class="btn btn-info" href="{{ route('edit',$users->id) }}">EDIT</a>
                     -->
                    <a href="{{ route('adminview', $users->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>
                    <a href="{{ route('adminedit', $users->id) }}" title="edit">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                <form action="{{ route('admindestroy',$users->id) }}" method="POST">
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
