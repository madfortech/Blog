@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('message')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-purple-700 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            page expired
                        </h2>
     

                        <a class="nav-link" href="{{('/')}}">
                            Go back
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection