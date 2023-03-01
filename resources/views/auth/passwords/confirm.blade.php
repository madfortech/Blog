@extends('layouts.app')
@section('title','Confirm Password')
@section('content')
        <div class="container">
            <div class="row justify-content-center" 
                style="margin-top: 52px;margin-bottom: 52px;">
                <div class="col-md-6">
                    <div class="p-2">
                        <h4 class="text-capitalize fw-bold text-center my-4 px-3 py-2 card-title">
                            confirm password
                        </h4>

                        <!-- START FORM -->
                        <form 
                            method="POST" 
                            action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="mx-2 py-2">
                                <label class="form-label" for="password">
                                    {{ __('Password *') }}
                                </label>
                                <input 
                                class="form-control form-control-sm
                                @error('password') is-invalid @enderror" 
                                type="password" 
                                value="{{ old('email') }}"
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
                            <!-- password field -->

                            <div class="mx-2 py-2">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-primary"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <!-- reset password -->

                            <div class="mx-2 py-2 d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    &nbsp;
                                    {{ __('Confirm Password') }}
                                </button>
                            </div>
                            <!-- Button -->

                        </form>
                    </div>
                </div>
            </div>
        </div>   
@endsection
