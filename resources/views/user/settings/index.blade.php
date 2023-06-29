@extends('layouts.app')
@section('title','Settings')
@section('content')
        <div class="container">
            <div class="row gx-3 py-5 my-5">
                <div class="col-12 col-md-auto">
                    <h3 class="text-capitalize p-2 card-title">{{ __(' settings') }}</h3>
                    <div class="p-2 border border-1">
                        <div class="my-2 gap-2 d-flex flex-nowrap">
                            @if(file_exists(app_path('Http/Controllers/User/ProfileController.php')))
                                <a href="{{route('user.profile.edit')}}" class="btn btn-sm rounded-pill">
                                    <i class="far fa-edit"></i>&nbsp;
                                    {{ __('edit profile ') }}
                                </a>
                            @endif
                            
                            @if(file_exists(app_path('Http/Controllers/User/ProfileController.php')))
                                <a href="{{route('user.password.edit')}}" class="btn btn-sm rounded-pill">
                                    <i class="far fa-edit"></i>&nbsp;
                                    {{ __(' edit password') }}
                                </a>
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection