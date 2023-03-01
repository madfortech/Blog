@extends('layouts.app')
@section('title','Profile')
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
                            <h3 class="py-3"> {{ Auth::user()->name }}</h3>
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
 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-2">
                <div class="col-md-7">
                    <div class="d-flex border border-1 shadow-sm my-2 px-3 mx-2">
                        <div class="px-0 mx-2">
                            <p class="px-1 py-4 card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                            </p>
                            <video class="bg-info" width="100%" height="400" autoplay="">

                            </video>

                            <div class="border border-1 p-1">
                                <div class="p-1">
                                    <img class="rounded-circle" 
                                    src="{{asset('img/img6.jpg?h=ab6e8a67943ee3914fb0d8d5ac31b292')}}" 
                                    width="30" height="30">
                                    <a class="text-decoration-none ms-1" href="#">
                                        {{ Auth::user()->name }}
                                    </a>
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

                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection