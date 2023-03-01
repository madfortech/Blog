@extends('layouts.user')
@section('title','User homepage')
@section('content')
@include('layouts.nav')
        <div class="container">
            <div class="row justify-content-center py-5" style="margin-top: 50px;margin-bottom: 50px;">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center border border-1 p-2" style="border: 1px solid rgb(58,138,185);">
                        <div style="text-align: center;">
                            <img class="mt-3 rounded-circle" 
                            src="{{asset('img/img6.jpg?h=ab6e8a67943ee3914fb0d8d5ac31b292')}}" 
                            alt="alt-image" 
                            width="200" 
                            height="200">
                            <ul class="list-inline mx-5 pt-2 m-sm-2 pb-0 mx-md-4 my-md-2">
                                <li class="list-inline-item">
                                    <button class="btn btn-sm text-capitalize fs-6 fw-bold mb-1" 
                                        type="button">
                                        &nbsp;0 follow&nbsp;
                                    </button>
                                </li>
                                <!-- follow -->

                                <li class="list-inline-item">
                                    <button class="btn btn-sm text-capitalize fs-6 fw-bold mb-1" 
                                        type="button">
                                        0 followers&nbsp;
                                    </button>
                                </li>
                                <!-- followers -->

                                <li class="list-inline-item">
                                    <a 
                                        href="{{ route('profile.profile.edit')}}" 
                                        class="btn btn-sm text-capitalize fs-6 fw-bold mb-1" 
                                        type="button">
                                        edit profile&nbsp;
                                    </a>
                                </li>
                                <!-- edit profile -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-2">
                <div class="col-md-7">
                    <div class="d-flex border border-1 shadow-sm my-4 px-3 mx-2">
                        <div class="px-0 mx-2">
                            <p class="px-1 py-4 card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                            </p>
                            <video class="bg-info" width="100%" height="400" autoplay="">

                            </video>

                            <div class="d-flex border border-1 p-1">
                                <div class="p-1">
                                    <img class="rounded-circle" 
                                    src="{{asset('img/img6.jpg?h=ab6e8a67943ee3914fb0d8d5ac31b292')}}" 
                                    width="30" height="30">
                                    <a class="text-decoration-none ms-1" href="#">
                                        John doe
                                    </a>
                                </div>
                                <div class="ms-auto p-1">
                                    <button 
                                        class="btn btn-sm text-capitalize fs-6 fw-bold" 
                                        type="button">
                                        follow
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column">
                            <span class="p-2">
                                <i class="fas fa-heart" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="23.3k"></i>
                            </span>
                            <span class="p-2">
                                <i class="fas fa-comment" data-bs-toggle="modal" data-bss-tooltip="" data-bs-placement="right" title="23.3k" data-bs-target="#commentModal"></i>
                            </span>

                            <div id="commentModal" class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Post Comment
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-unstyled">
                                                <li>Item 1</li>
                                            </ul>
                                            <form method="post">
                                                <div class="input-group">
                                                    <input 
                                                    class="form-control form-control-sm rounded-0" 
                                                    type="text" name="comment" 
                                                    placeholder="post comment" required="">
                                                    <button 
                                                        class="btn btn-sm rounded-0 border border-1" 
                                                        type="submit">
                                                        Post
                                                    </button>
                                                </div>
                                            </form>
                                            <!-- form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- comment modal -->

                            <span class="p-2">
                                <i class="fas fa-flag" data-bs-toggle="modal" data-bs-target="#flagModal"></i>
                            </span>
                            <div id="flagModal" class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Report
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <select class="form-select">
                                                    <optgroup>
                                                        <option value="12">This is item 1</option>
                                                        <option value="13">This is item 2</option>
                                                        <option value="14">This is item 3</option>
                                                    </optgroup>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- report -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection