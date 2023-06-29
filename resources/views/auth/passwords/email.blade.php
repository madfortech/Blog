@extends('layouts.app')
@section('title','Reset Password')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="p-2">
                        <h1 class="text-capitalize fw-bold text-center card-title my-4 px-3 py-2">
                            {{ __('Reset Password') }}
                        </h1>


                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" 
                                class="border border-2 p-2"
                                action="{{ route('password.email') }}">
                                @csrf

                                <div class="mx-2 py-2">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                     
                                        <input id="email" type="email" 
                                        class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}" 
                                        placeholder="mail@example.com"
                                        required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                
                                <div class="mx-2 py-2 d-grid gap-2">
                                    <button class="btn btn-sm rounded-pill" type="submit">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
