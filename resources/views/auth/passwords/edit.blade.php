@extends('layouts.app')
@section('title','Password Update')
@section('content')
        <div class="container">
            <div class="row gx-3 py-5 my-5">
                <div class="col-md-6 py-4">
                    <div class="border border-1">
                        <h3 class="text-capitalize my-4 px-3 py-2 card-title">
                            change password
                        </h3>
                        @if(Session::has('message'))
                            <div class="alert alert-success rounded-0">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <!-- START FORM CHANGE PASSWORD -->
                        <form 
                            class="p-2 form" 
                            method="post" 
                            action="{{ route("user.password.update") }}">
                            @csrf
                            <div class="mb-3 p-1">
                                <label class="form-label" id="password" for="password">
                                    Password *
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                type="password" 
                                id="password" 
                                name="password"
                                required=""
                                placeholder="new password">
                                @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <!-- Password field -->

                            <div class="mb-3 p-1">
                                <label class="form-label" id="password_confirmation" for="password_confirmation">
                                    Confirm Password *
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation"
                                required=""
                                placeholder="password confirm">
                            </div>
                            <!-- Confirm Password field -->

                            <div class="mb-3 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    <i class="fas fa-save"></i>&nbsp;
                                    Update
                                </button>
                            </div>
                            <!-- Button field -->

                        </form>
                        <!-- END FORM CHANGE PASSWORD -->
                       
                    </div>
                </div>

                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h3 class="display-5 text-capitalize fw-bold my-4">
                            learn about why change password
                        </h3>
                        <p class="py-3 card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi 
                            quis commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl 
                            tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection