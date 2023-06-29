@extends('layouts.app')
@section('title','Password Update')
@section('content')
        <div class="container">
            <div class="row gx-3 py-2 my-2">
                <div class="col-xl-6 col-md-auto">
                    <h3 class="text-capitalize my-4 px-3 py-2 card-title">
                    {{ __('update password ') }}
                    </h3>
                    <div class="border border-1">
                       
                        @if(Session::has('message'))
                            <div class="bg-success text-white p-3 mb-2">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <!-- START FORM UPDATE PASSWORD -->
                        <form 
                            class="p-2 form" 
                            method="post" 
                            action="{{ route("user.password.update") }}">
                            @csrf
                            <div class="mb-3 p-1">
                                <label class="form-label" id="password" for="password">
                                {{ __(' Password') }}
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
                                {{ __('Confirm password ') }}
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
                                    {{ __('Update ') }}
                                </button>
                            </div>
                            <!-- Button field -->

                        </form>
                        <!-- END FORM UPDATE PASSWORD -->
                       
                    </div>
                </div>
 
            </div>
        </div>
@endsection