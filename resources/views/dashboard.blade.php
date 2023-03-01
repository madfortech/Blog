@extends('layouts.app')
@section('title', 'user Homepage')
@section('content') 
            <div class="container">
                <div class="row justify-content-center py-5">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center border border-1 p-2">
                            <div class="text-center">
                                <img class="mt-3 rounded-circle" 
                                src="{{asset('img/img6.jpg')}}" alt="alt-image" 
                                width="200" height="200">
                                <ul class="list-inline mx-5 pt-2 m-sm-2 pb-0 mx-md-4 my-md-2">
                                    <li class="list-inline-item">
                                        <a href="{{route('user.posts.create')}}" 
                                            class="btn btn-sm text-capitalize fs-6 fw-bold mb-1">
                                            upload&nbsp;
                                        </a>
                                    </li>
                                    
                                    <li class="list-inline-item">
                                        <a  href="{{route ('user.profile.edit') }}"
                                            class="btn btn-sm text-capitalize fs-6 fw-bold mb-1">
                                            profile&nbsp;
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end follow unfollo -->
            </div>
@endsection('content')
