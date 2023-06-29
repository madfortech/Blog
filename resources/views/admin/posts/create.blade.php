@extends('layouts.admin')
@section('title','Post Create')
@section('content')

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">  {{ __('Add media') }}</h3> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">

                            @if (session('success'))
                            <div class="bg-success p-3 mb-2 text-white">
                                {{ session('success') }}
                            </div>
                            @endif

                            <div class="card shadow mb-3">
                                <div class="card-body">
                                    <form  
                                        method="POST" 
                                        enctype="multipart/form-data"
                                        action="{{route ('admin.posts.store') }}">
                                        @csrf

                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="title">
                                                    {{ __('Title') }}
                                                    </label>
                                                    <input 
                                                    class="form-control form-control-sm rounded-0 {{ $errors->has('title') ? 'is-invalid' : '' }}" 
                                                    type="text" 
                                                    id="title" 
                                                    name="title"
                                                    required
                                                    placeholder="title">
                                                    @if($errors->has('title'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('title') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Title -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="description">
                                                    {{ __('Description') }}
                                                    </label>
                                                    <textarea class="form-control form-control-sm rounded-0 {{ $errors->has('description') ? 'is-invalid' : '' }}" 
                                                        rows="5" 
                                                        name="description" 
                                                        placeholder="write post description .....!"
                                                        required>
                                                    </textarea>
                                                    @if($errors->has('description'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('description') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Description -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="audio">
                                                        {{ __('Audio') }}
                                                    </label>
                                                    <input class="form-control form-control-sm rounded-0 {{ $errors->has('avatar') ? 'is-invalid' : '' }}" 
                                                    type="file" id="avatar" 
                                                    name="avatar"
                                                    accept="audio/*"
                                                    required
                                                    placeholder="short description">
                                                    @if($errors->has('avatar'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('avatar') }}
                                                        </span>
                                                    @endif  
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Audio -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-sm btn btn-primary rounded-pill" 
                                                        type="submit">
                                                        <i class="fas fa-upload"></i>&nbsp;
                                                        {{ __('Publish') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection