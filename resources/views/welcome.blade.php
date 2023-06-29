@extends('layouts.app')
@section('title','Welcome')
@section('content')
        <div class="container-fluid mt-5">
            <div class="row g-0">
                <div class="col-sm-6 col-lg-8 offset-sm-3 offset-lg-2">
                    <header>
                        <video width="100%" height="315" controls=""></video>
                    </header>
                </div>
            </div>
            <!-- End: Header Clean -->
            
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5">
                            <img class="rounded img-fluid w-100 fit-cover" 
                                src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        </div>
                    </div>
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div>
                            <h2 class="text-uppercase fw-bold">
                                Biben dum<br>fringi dictum, augue purus
                            </h2>
                            <p class="my-3">
                                Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, 
                                risus donec ad fusce augue interdum.
                            </p>
                            <a class="btn btn-primary btn-lg me-2" role="button" href="#">
                                Button
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: About Section -->

            <section>
                <div class="container py-4 py-xl-5">
                    <div class="row mb-5">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2>Heading</h2>
                            <p class="w-lg-50">
                                Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. 
                                Vestibulum dui eget ultrices.
                            </p>
                        </div>
                    </div>
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        @foreach($posts as $post)
                            <div class="col">
                                <div class="card p-3">
                                    <audio 
                                    src="{{$post->getFirstMediaUrl('avatars','preview') }}" 
                                    controls 
                                    muted 
                                    alt="{{('$post->id')}}"
                                    preload="none"
                                    class="w-100">

                                    </audio>
                                    <div class="card-body p-4">
                                        <!-- <p class="text-primary mb-0">Article</p> -->
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p>{{ $post->description }}</p>
                                        <div class="d-flex">
                                            <img class="rounded-circle flex-shrink-0 me-3 fit-cover" 
                                            width="50" 
                                            height="50" 
                                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                                            <div>
                                                <p class="fw-bold mb-0">{{ $post->user->name }}</p>
                                                <p class="text-muted mb-0">{{ $post->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
             
            </section>
            <!-- End: Articles Cards -->

        </div>
@endsection	