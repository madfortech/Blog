@extends('layouts.app')
@section('title', 'Homepage')
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
                                        <a href=" {{route('user.profile.edit')}}" 
                                            class="btn btn-sm text-capitalize fs-6 fw-bold mb-1">
                                            edit profile&nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end follow unfollo -->
                
                <div class="row justify-content-center mt-2">
                @foreach($posts as $post)
                    <div class="col-md-7">
                  
                        <div class="d-flex border border-4 shadow-sm my-4 px-3 mx-2">
                            <div class="px-0 mx-2">
                                <p class="px-1 py-4 card-text">
                                {{ $post->description }}
                                </p>
                                <!-- <video class="" width="100%" height="400" autoplay=""></video> -->
                                <div class="d-flex border  border-2 p-1 my-2">
                                    <div class="p-1">
                                        <img class="rounded-circle" 
                                        src="{{ $post->thumbnail_url }}" 
                                        width="30" height="30">
                                        <a class="text-decoration-none ms-1" href="#">
                                        {{ optional($post->user)->username ?? 'No author found' }}
                                        </a>
                                        
                                        @if(auth()->user()->id === $post->user_id)
                                            <a class="btn btn-sm text-capitalize fs-6 fw-bold"
                                                href="{{ route('user.posts.edit', $post->id) }}">
                                                edit
                                            </a>
                                        @endif

                                     
                                        @if(auth()->user()->id === $post->user_id)
                                            <form action="{{ route('user.posts.destroy', $post->id) }}" 
                                                method="POST" 
                                                class="border-b-2">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="mb-3 d-grid p-2">
                                                    <button class="btn btn-sm fs-6 fw-bold"
                                                        type="submit">
                                                        <i class="fas fa-upload"></i>&nbsp;
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="ms-auto p-1">
                                       
                                        <!-- start pop up -->
                                    
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
                </div>

            </div>


@endsection
