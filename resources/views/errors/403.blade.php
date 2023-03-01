@extends('errors::minimal')
@section('title', __('403 Forbidden'))
@section('message')
        <div class="container mt-5">
            <div class="row gy-3" 
               >
                <div>
                    <div class="px-3  mx-2 text-center">
                        <h1>
                            This page is restricted admin only  users will not 
                            be able to access this page
                        </h1>
                        <a class="nav-link" href="{{('/')}}">
                           Go back
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection

