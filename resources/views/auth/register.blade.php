@extends('layouts.app')
@section('title', 'Register')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="py-5">
                        <h4 class="text-center mb-2 p-2 card-title">
                             register
                        </h4>
                        <!-- Register Form -->
                        <form 
                            class="border border-2 p-2"
                            
                            method="POST" 
                            action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 p-1">
                                <label class="form-label" for="name">
                                    {{ __('Name *') }} 
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('name') is-invalid @enderror" 
                                type="text" 
                                id="name" 
                                autocomplete="name"
                                autofocus
                                value="{{ old('name') }}"
                                name="name" 
                                placeholder="Full name" 
                                required="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- name field -->

                            <div class="mb-3 p-1">
                                <label class="form-label" for="username">
                                    {{ __('Username *') }} 
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('username') is-invalid @enderror" 
                                type="text" 
                                id="username" 
                                autocomplete="username"
                                autofocus
                                value="{{ old('username') }}"
                                name="username" 
                                placeholder="username" 
                                required="">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- username field -->

                            <div class="mb-3 p-1">
                                <label class="form-label" for="email">
                                    {{ __('Email Address *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('email') is-invalid @enderror" 
                                type="email" 
                                value="{{ old('email') }}"
                                id="email" 
                                name="email" 
                                autocomplete="email"
                                placeholder="mail@example.com" 
                                required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mb-3 p-1">
                                <label class="form-label" for="password">
                                    {{ __('Password *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="********" 
                                autocomplete="new-password"
                                required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password field -->


                            <div class="mb-3 p-1">
                                <label class="form-label" for="password-confirm">
                                    {{ __('Confirm Password *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                id="password-confirm" 
                                name="password_confirmation" 
                                placeholder="********" 
                                autocomplete="new-password"
                                required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- confirm password field -->

                            <div class="mb-3">
                                <label class="form-label text-muted" for="terms">
                                    <input 
                                    type="checkbox" 
                                    required="" 
                                    name="terms">
                                    &nbsp;please read our 
                                    <a class="text-decoration-none" href="#">
                                        terms
                                    </a>
                                    &nbsp;condtions&nbsp;
                                </label>
                            </div>
                            <!-- terms field -->

                            <div class="mb-3 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <!-- button -->

                        </form>
                        <!-- End Register Form -->

                        <div class="text-center border border-1 p-2">
                            <p class="mt-3 text-muted">
                                All ready have an account&nbsp;
                                <a class="text-decoration-none text-primary" 
                                    href="{{route('login')}}">
                                    Login
                                </a>
                                &nbsp;&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
@endsection
