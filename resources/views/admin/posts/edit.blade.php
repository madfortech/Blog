@extends('layouts.admin')
@section('title','Edit Post')
@section('content')

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">{{ __(' Edit media') }}</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">

                            <div class="card shadow mb-3">
                                @if (session('success'))
                                <div class="bg-success p-3 mb-2 text-white">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <div class="card-body">
                                    <form 
                                        method="POST" 
                                        enctype="multipart/form-data"
                                        action="{{route('admin.posts.update', $post->id)}}">
                                        @csrf
                                        @method('PUT')
                                        
                                        
                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="title">
                                                    {{ __('Title ') }}
                                                    </label>
                                                    <input 
                                                    class="form-control form-control-sm rounded-0" 
                                                    type="text" 
                                                    id="title" 
                                                    name="title"
                                                    value="{{ old('title', $post->title) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Title -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="description">
                                                    {{ __(' Description') }}
                                                    </label>
                                                    <textarea class="form-control form-control-sm rounded-0" 
                                                        rows="5" 
                                                        value="{{ old('description', $post->description) }}"
                                                        name="description">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Description -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="audio">
                                                        {{ __(' Audio') }}
                                                    </label>
                                                    <input 
                                                    class="form-control form-control-sm rounded-0" 
                                                    type="file" 
                                                    id="avatar" 
                                                    name="avatar"> 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Avatar -->

                                        <div class="row gx-1 gy-1">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button 
                                                        class="btn btn-sm btn btn-primary rounded-pill" 
                                                        type="submit">
                                                        <i class="fas fa-upload"></i>&nbsp;{{ __('Update ') }}
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