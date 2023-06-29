@extends('layouts.app')
@section('title','Login')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="p-2">
                        <h1 class="text-capitalize fw-bold text-center card-title my-4 px-3 py-2">
                            {{ __('Login') }}
                        </h1>

                          
                        @if(Session::has('message'))
                            <div class="bg-danger text-white p-3 mb-2">
                                {{Session::get('message')}}
                            </div>
                        @endif
                 
                        <form method="POST" 
                            class="border border-2 p-2"
                            action="{{ route('login') }}">
                            @csrf

                            <div class="mx-2 py-2">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>

                               
                                    <input id="email" 
                                    type="email" 
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                    required autocomplete="email" 
                                    placeholder="mail@mail.com"
                                    autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- email -->


                            <div class="mx-2 py-2">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                 
                                    <input id="password" type="password" 
                                    class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" 
                                    required autocomplete="current-password"
                                    placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- password -->

                            <div class="mx-2 py-2">
                                <label class="form-label" for="remember">
                                    <input type="checkbox" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} 
                                    name="remember">{{ __('Remember Me') }}
                                </label>
                            </div>
                            <!-- remember me -->

                            <div class="mx-2 py-2">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-primary" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="mx-2 py-2 d-grid gap-2">
                                <button class="btn btn-sm rounded-pill" type="submit">
                                    <i class="fas fa-lock"></i>&nbsp;
                                    {{ __('Login') }}
                                </button>
                            </div>
 
                        </form>
              
                    </div>
                </div>
            </div>
        </div>
@endsection
