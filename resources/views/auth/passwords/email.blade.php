@extends('layouts.app')
@section('title', 'Reset Password')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="my-5">
                        <h4 class="text-center mb-2 p-2 card-title">
                            Reset Password
                        </h4>
                        <!-- Start Form -->
                        <form 
                            class="border border-1 p-2"
                            method="POST" 
                            action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-3 p-1">
                                <label class="form-label" for="email">
                                    {{ __('Email Address *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('email') is-invalid @enderror" 
                                type="email" 
                                id="email" 
                                value="{{ old('email') }}"
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
                            <!-- Email Field -->

                            <div class="mb-3 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                        {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                            <!-- Button -->
 
                        </form>
                        <!-- End Start Form -->
                    </div>
                </div>
            </div>
        </div>  
@endsection
