@extends('layouts.app')
@section('title','Welcome')
@section('content')
        <div class="container mt-5">
            <div class="row gy-3 justify-content-center">
                <div class="col-md-7">
                @foreach($posts as $post)
                    <div class="border border-1 shadow-sm my-4 px-3 mx-2">
                    
                        <div class="px-0 mx-2 my-2">
                            <video class="bg-info" width="100%" height="400" autoplay=""></video>
                            <p class="px-1 py-4 card-text">
                                {{ $post->description }}
                            </p> 
                            <a class="fs-6 text-decoration-none ms-1" 
                                href="{{ route('user.posts.show', ['post' => $post]) }}">
                                <strong>
                                    {{ optional($post->user)->username ?? 'No author found' }}
                                </strong>
                              
                            </a>
                        </div>
                        <!-- popup modal -->
                        <div class="d-flex flex-row">
                            <span class="p-2">
                                <i class="fas fa-heart" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="23.3k"></i>
                            </span>
                            <span class="p-2">
                                <a href="{{ route('user.posts.show', ['post' => $post]) }}">
                                    <i class="fas fa-comment" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="23.3k"></i>
                                </a>
                            </span>
                           
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
@endsection	