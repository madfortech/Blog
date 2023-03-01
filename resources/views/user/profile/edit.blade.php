@extends('layouts.app')
@section('title','Profile Update')
@section('content')
        <div class="container">
            <div class="row gx-3 py-5 my-5">
                <div class="col-md-6 py-4">
                    <div class="border border-1">
                        <h3 class="text-capitalize my-4 px-3 py-2 card-title">
                            Edit profile
                        </h3>
                        @if(Session::has('message'))
                            <div class="alert alert-success rounded-0">
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
                                <label class="form-label" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" for="email" title=" forget your email please read  our help section ">
                                    Email
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
                            <!-- email field -->
 

                            <div class="mb-3 p-1">
                                <label class="form-label text-muted" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" for="username" title=" can't change username ">
                                    Username
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0" 
                                type="text" 
                                id="username" 
                                name="useranme" 
                                value="{{ old('username', auth()->user()->username) }}"
                                readonly="" 
                                disabled="">
                            </div>
                            <!-- username field -->

                            <div class="mb-3 p-1">
                                <label class="form-label" for="name">
                                    Name 
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name', auth()->user()->name) }}">
                            </div>
                            <!-- name field -->
 

                            <div class="mb-3 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    <i class="fas fa-save"></i>
                                    &nbsp;Update
                                </button>
                            </div>
                            <!-- button field -->

                        </form>
                        <!-- END PROFILE EDIT FORM -->
                    </div>
                </div>

                
                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h3 class="display-5 text-capitalize fw-bold my-4">
                            learn about edit profile
                        </h3>
                        <p class="py-3 card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
@endsection