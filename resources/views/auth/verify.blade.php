@extends('layouts.app')
@section('title', 'Verify Your Email Address')
@section('content')
        <div class="container">
            <div class="row justify-content-center" 
                style="margin-top: 52px;margin-bottom: 52px;">
                <div class="col-md-6">
                    <div class="my-5">
                        <h4 class="text-center mb-2 p-2 card-title">
                            {{ __('Verify Your Email Address') }}
                        </h4>
            
                        @if (session('resent'))
                            <div class="alert alert-success rounded-0" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <strong class="text-center">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                        </strong>
                       
                        <!-- START FORM -->
                        <form 
                            class="border border-1 p-2" 
                            style="border: 1px solid rgb(58,138,185);"
                            method="POST" 
                            action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="d-grid gap-2">
                                <button 
                                    class="btn btn-sm btn btn-primary rounded-pill" 
                                    type="submit">
                                    {{ __('click here to request another') }}
                                </button>
                            </div>
                        </form>
                        <!-- END FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
