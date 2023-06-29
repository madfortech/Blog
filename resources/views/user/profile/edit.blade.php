@extends('layouts.app')
@section('title','Edit Profile')
@section('content')
        <div class="container">
            <div class="row gx-3 py-2 my-2">
                <div class="col-xl-6 col-md-auto">
                    <h3 class="text-capitalize my-4 px-3 py-2 card-title">
                    {{ __(' edit profile') }}
                    </h3>
                    <div class="border border-1">
                        @if(Session::has('message'))
                            <div class="bg-success text-white p-3 mb-2">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <!-- START PROFILE EDIT FORM -->
                        <form 
                            class="p-2 form" 
                            method="post"
                            action="{{ route("user.profile.update") }}">
                            @csrf
                           
                            <div class="mb-3 p-1">
                                <label class="form-label" 
                                    data-bs-toggle="tooltip" 
                                    data-bss-tooltip="" 
                                    data-bs-placement="right" 
                                    for="email" 
                                    title=" forget your email please read  our help section ">
                                    {{ __(' email') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0" 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email', auth()->user()->email) }}"
                                readonly="" 
                                disabled="">
                            </div>
                            <!-- EMAIL FIELD -->

                             <div class="mb-3 p-1">
                                <label class="form-label text-muted" 
                                data-bs-toggle="tooltip" data-bss-tooltip="" 
                                data-bs-placement="right" for="name" title="be real">
                                {{ __(' name') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0" 
                                type="text" 
                                name="name" 
                                value="{{ old('name', auth()->user()->name) }}">
                            </div>
                            <!-- NAME FIELD -->

                             <div class="mb-3 p-1">
                                <div class="d-flex">
                                    @if(file_exists(app_path('Http/Controllers/User/ProfileController.php')))
                                        <a href="{{route('user.password.edit')}}" class="text-decoration-none fs-6">
                                            <i class="far fa-edit"></i>&nbsp;
                                            {{ __(' change password') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- CHANGE PASSWORD -->
                            
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-sm rounded-pill" type="submit">
                                {{ __(' update') }}
                                </button>
                            </div>
                            <!-- BUTTON -->

                        </form>
                        <!-- END PROFILE EDIT FORM -->
                        @if(file_exists(app_path('Http/Controllers/User/ProfileController.php')))
                        <form 
                            action="{{ route('user.profile.destroy') }}" 
                            method="POST">
                            @method('DELETE')
                            @csrf

                            <div class="mb-3 d-grid gap-2">
                                <button class="btn-sm bg-danger rounded-pill border-0 text-white" 
                                    type="submit">
                                    {{ __('delete account ') }}
                                </button>
                            </div>
                         </form>
                         @endif
                    </div>
                </div>
                
 
            </div>
        </div>
@endsection


 
                            
 
 