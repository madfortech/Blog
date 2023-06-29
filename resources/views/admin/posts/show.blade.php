@extends('layouts.app')
@section('title','Single Post')
@section('content')
        <div class="container-fluid mt-5">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="border border-1 shadow-sm my-4 px-3 mx-2">
                        <ul class="list-unstyled">
                            <li class="active">Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                   
                    <div class="row g-0">
                   
                        <div class="col-md-7">
                            <div id="dark-bg" class="border border-1 shadow-sm my-4 px-3 mx-2 rounded">
                                <div class="px-0 mx-2 py-2">
                                    
                                    <div class="py-3">
                                    <a href=" {{route('admin.posts.show', $post->id)}}"
                                       class="text-decoration-none">
                                        <article class="text-white">
                                        {{ $post->description }}
                                        </article>
                                        <audio class="w-100" 
                                        src="{{ $post->getFirstMediaUrl('avatar') }}"
                                        controls="" muted="" type="audio/mpeg">
                                        </audio>
                                        <small class="text-light">  {{ $post->created_at }}</small>
                                    </a>
                                    </div>
                                    <div class="d-flex flex-grow-1">
                                            <a class="text-decoration-none" href="{{route('admin.posts.edit',$post->id)}}">
                                                <i class="far fa-edit text-success"></i>
                                                edit
                                            </a>
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" 
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
                                         
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
@endsection	