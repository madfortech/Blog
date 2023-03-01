@extends('errors::minimal')
@section('title', __('Service Unavailable'))
@section('message')
        <div class="container mt-5">
            <div>
                <div>
                    <div class="px-3 mx-2 text-center">
                        
                        <h1>503 error</h1>

                        <a class="nav-link" href="{{('/')}}">
                           Go back
                        </a>
                      
                    </div>
                   
                </div>
            </div>
        </div>
@endsection