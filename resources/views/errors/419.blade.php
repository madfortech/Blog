@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('message')
        <div class="container mt-5">
            <div class="row gy-3" 
               >
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