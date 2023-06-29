@extends('layouts.app')
@section('title','Register')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="p-2">
                        <h1 class="text-capitalize fw-bold text-center card-title my-4 px-3 py-2">
                            {{ __('Register') }}
                        </h1>

                        <form method="POST" 
                            class="border border-2 p-2"
                            action="{{ route('register') }}">
                            @csrf
 
                            <div class="mx-2 py-2">
                                <label for="name" class="form-label">{{ __('Name *') }}</label>

                                
                                    <input id="name" type="text" 
                                    class="form-control form-control-sm @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}" 
                                    placeholder="full name"
                                    required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- name -->

                            <div class="mx-2 py-2">
                                <label for="email" class="form-label">{{ __('Email Address *') }}</label>

                               
                                    <input id="email" type="email" 
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="mail@example.com"
                                    required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- email -->

                            <div class="mx-2 py-2">
                                <label for="password" class="form-label">{{ __('Password *') }}</label>

                                 
                                    <input id="password" 
                                    type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="new-password"
                                    placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- password -->

                            <div class="mx-2 py-2">
                                <label for="password-confirm" class="form-label">
                                    {{ __('Confirm Password *') }}
                                </label>

                                 
                                    <input id="password-confirm" type="password" class="form-control" 
                                    name="password_confirmation" 
                                    placeholder="confirm password"
                                    required autocomplete="new-password">
                            </div>
                            <!-- confirm password -->

                            <div class="mx-2 py-2 d-grid gap-2">
                                <button class="btn btn-sm rounded-pill" type="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
 
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
