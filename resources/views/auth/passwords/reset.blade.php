@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
        <div class="container">
            <div class="row justify-content-center" 
                style="margin-top: 52px;margin-bottom: 52px;">
                <div class="col-md-6">
                    <div class="p-2">
                        <h4 class="text-capitalize fw-bold text-center my-4 px-3 py-2 card-title">
                            reset password
                        </h4>
                        <!-- START FORM -->
                        <form 
                            method="POST" 
                            class="border border-2 p-2"
                            action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mx-2 py-2">
                                <label class="form-label" for="email">
                                    {{ __('Email Address *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('email') is-invalid @enderror" 
                                type="email" 
                                id="email" 
                                name="email" 
                                autocomplete="email"
                                
                                autofocus
                                value="{{ $email ?? old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mx-2 py-2">
                                <label class="form-label" for="email">
                                    {{ __('Password *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                id="email" 
                                name="password" 
                                autocomplete="password"
                                placeholder="new password"
                                autocomplete="new-password"
                                required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password field -->

                            <div class="mx-2 py-2">
                                <label class="form-label" for="password-confirm">
                                    {{ __('Confirm Password') }} 
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                id="password-confirm"
                                name="password_confirmation" 
                                placeholder="confirm password"
                                autocomplete="new-password"
                                required="">
                                
                            </div>
                            <!-- confrim password field -->

                            
                            <div class="mx-2 py-2 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    &nbsp;
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                            <!-- Button -->
 
                        </form>
                        <!-- END FORM -->
                    </div>
                </div>
            </div>
        </div>
@endsection
