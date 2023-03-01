@extends('errors::minimal')
@section('title', __('Not Found'))
@section('message')
        <div class="container mt-5">
            <div class="row gy-3 justify-content-center" 
               >
                <div>
                    <div class="px-3 mx-2 text-center">
                        <h1>404 error</h1>
                        <a class="nav-link text-center" href="{{route('login')}}">
                           Go back
                        </a>
                      
                    </div>
                   
                </div>
            </div>
        </div>
@endsection
