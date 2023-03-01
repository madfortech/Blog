@extends('layouts.admin')
@section('title', 'View all users')
@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">View all users</h3>
    <div class="row">
        <div class="col">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">User Info</p>
                    <div class="card-body">

                    <div class="table-responsive table mt-2" 
                        id="dataTable" role="grid" 
                        aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email address</th>
                                    <th>Created at</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->username ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                {{ $user->email_verified_at ?? '' }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection