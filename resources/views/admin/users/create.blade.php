@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Create User</h3>
    <div class="row">
        <div class="col">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Create User</p>
                    <div class="card-body">
                        <form method="POST" 
                            action="{{ route("admin.users.store") }}" 
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-1 gy-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">
                                            <strong>
                                                {{('username')}}
                                            </strong>
                                        </label>
                                        <input 
                                        class="form-control form-control-sm rounded-0 {{ $errors->has('username') ? 'is-invalid' : '' }}" 
                                        type="text" name="username" id="username" 
                                        value="{{ old('username', '') }}"
                                        placeholder="username" 
                                        required>
                                        @if($errors->has('username'))
                                            <span class="text-danger">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- username -->

                            <div class="row gx-1 gy-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">
                                            <strong>
                                                {{('name')}}
                                            </strong>
                                        </label>
                                        <input 
                                        class="form-control form-control-sm rounded-0 {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                        type="text" name="name" id="name" 
                                        value="{{ old('name', '') }}"
                                        placeholder="john doe" 
                                        required>
                                        @if($errors->has('name'))
                                            <span class="text-danger">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- name -->

                            <div class="row gx-1 gy-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">
                                            <strong>
                                                {{('email')}}
                                            </strong>
                                        </label>
                                        <input 
                                        class="form-control form-control-sm rounded-0 
                                        {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                                        type="email" name="email" id="email" 
                                        value="{{ old('email', '') }}" 
                                        placeholder="mail@example.com" 
                                        required>
                                        @if($errors->has('email'))
                                            <span class="text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-1 gy-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">
                                            <strong>
                                                {{('password')}}
                                            </strong>
                                        </label>
                                        <input 
                                        class="form-control form-control-sm rounded-0 
                                        {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                        type="password" name="password" id="password" 
                                        placeholder="password" 
                                        required>
                                        @if($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- password -->
 

                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm rounded-0 border-0" 
                                    type="submit">
                                    <i class="fas fa-plus"></i>&nbsp;
                                    create
                                </button>
                            </div>
                            <!-- button -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




 
        
     

@endsection