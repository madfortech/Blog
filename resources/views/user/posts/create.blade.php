@extends('layouts.app')
@section('title','Post Create')
@section('content')
@include('layouts.nav')
<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="p-2 card-title">Add media</h3>
                    <div class="p-2 border border-1">
                        <form class="p-2 form" 
                            method="POST" 
                            enctype="multipart/form-data"
                            action="{{route ('user.posts.store') }}">
                            @csrf
                            <div class="mb-3 mt-3 p-2">
                                <label class="form-label" for="file">
                                    Description
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
                            <div class="mb-3 mt-3 p-2">
                                <label class="form-label" for="avatar">
                                    Avatar *
                                </label>
                                <input class="form-control form-control-sm rounded-0 {{ $errors->has('avatar') ? 'is-invalid' : '' }}" 
                                type="file" id="avatar" name="avatar"
                                required>
                                @if($errors->has('avatar'))
                                    <span class="text-danger">
                                        {{ $errors->first('avatar') }}
                                    </span>
                                @endif
                                 
                            </div>
                            <div class="mb-3 d-grid p-2">
                                <button class="btn btn-sm btn btn-primary rounded-pill" type="submit">
                                    <i class="fas fa-upload"></i>&nbsp;Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h3 class="text-capitalize my-4 card-title">why upload video&nbsp;</h3>
                        <p class="py-3 card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br></p>
                    </div>
                </div>
            </div>
        </div>
@endsection