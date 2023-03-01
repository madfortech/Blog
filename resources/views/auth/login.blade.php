@extends('layouts.app')
@section('title', 'Login')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="p-2">
                        <h4 class="text-capitalize fw-bold text-center my-4 px-3 py-2 card-title">
                            Login
                        </h4>

                        @if (session('message'))
                            <div class="alert alert-danger rounded-0" role="alert">
                                {{ __('Account delete successfully') }}
                            </div>
                        @endif

                        <form 
                            method="POST" 
                            action="{{ route('login') }}"
                            class="border border-2 p-2">
                            @csrf

                            <div class="mx-2 py-2">
                                <label class="form-label" for="email">
                                    {{ __('Email Address *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('email') is-invalid @enderror" 
                                type="email" 
                                value="{{ old('email') }}"
                                id="email" 
                                name="email" 
                                autocomplete="email"
                                autofocus
                                placeholder="mail@example.com" 
                                required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mx-2 py-2">
                                <label class="form-label" for="password">
                                    {{ __('Password *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                id="password" 
                                name="password" 
                                autocomplete="current-password"
                                placeholder="password" 
                                required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mx-2 py-2">
                                <label class="form-label" for="remember">
                                    <input 
                                    type="checkbox" 
                                    id="remember" 
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                </label>
                            </div>
                            <!-- rememberme field -->

                            <div class="mx-2 py-2">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-primary" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <!-- Forget password -->

                            <div class="mx-2 py-2 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    <i class="fas fa-lock"></i>&nbsp;
                                    Login
                                </button>
                            </div>
                            <!-- Button -->
                          
                        </form>

                        <div class="mx-2 py-2">
                            <p class="text-center text-muted mt-3">
                                If you don't have an account
                                <a class="text-decoration-none text-primary" 
                                    href="{{('register')}}">&nbsp;register us
                                </a>
                                &nbsp;&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
