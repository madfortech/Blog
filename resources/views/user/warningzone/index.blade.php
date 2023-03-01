@extends('layouts.app')
@section('title','warning zone')
@section('content')
        <div class="container">
            <div class="row gx-3 py-5 my-5">
                <div class="col-md-6 py-4">
                    <div class="p-2 border border-1">
                        <h3 class="text-capitalize p-2 card-title text-danger">
                            warning zone
                        </h3>
                            <!-- START DELETE FORM -->
                            <form 
                                class="p-2 form" 
                                method="post" 
                                action="{{ route("user.profile.destroy") }}">
                                @csrf
                                <div class="mb-3 d-grid gap-2">
                                    <button 
                                        class="btn btn-sm btn btn-primary rounded-pill" 
                                        type="submit">
                                        <i class="fas fa-trash"></i>&nbsp;
                                        Delete account
                                    </button>
                                </div>
                            </form>
                            <!--END DELETE FORM -->
                            
                    </div>
                </div>

                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h3 class="text-capitalize my-4 card-title">
                            read more delete account information
                        </h3>
                        <p class="py-3 card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br>
                        </p>
                    </div>
                </div>


            </div>
        </div>
@endsection