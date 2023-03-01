@extends('errors::minimal')

@section('title', __('Server Error'))
@section('message')
        <div class="container mt-5">
            <div>
                <div>
                    <div class="px-3 mx-2 text-center">
                        
                        <h1>500 error</h1>

                        <a class="nav-link" href="{{('/')}}">
                           Go back
                        </a>
                     
                    </div>
                   
                </div>
            </div>
        </div>
@endsection