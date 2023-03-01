@extends('layouts.app')
@section('title','Settings')
@section('content')
        <div class="container">
            <div class="row gx-3 py-5 my-5">
                <div class="col-md-6 py-4">
                    <div class="p-2 border border-1">
                        <h3 class="text-capitalize p-2 card-title">
                            settings
                        </h3>
                        <!-- START Link -->
                        <div class="p-2 border border-1">
                            <div class="my-2 gap-2 d-flex flex-nowrap">
                                @if(file_exists(app_path('Http/Controllers/User/ProfileController.php')))
                                    <a href="{{route('user.profile.edit')}}" class="btn btn-sm rounded-pill" type="submit">
                                        <i class="far fa-edit"></i>&nbsp;Edit Profile
                                    </a>
                                @endif

                                @if(file_exists(app_path('Http/Controllers/User/UpdatePasswordController.php')))
                                    <a href="{{ route('user.password.edit') }}" class="btn btn-sm rounded-pill" type="submit">
                                        <i class="far fa-edit"></i>&nbsp;Change password
                                    </a>
                                @endauth

                                <a href="{{route('user.loginactivity.index')}}" class="btn btn-sm rounded-pill" type="submit">
                                    <i class="fas fa-user-lock"></i>&nbsp; Login Activity
                                </a>

                                <a href="{{route('user.warningzone.index')}}" 
                                    class="btn btn-sm rounded-pill" type="submit">
                                    <i class="fas fa-trash"></i>&nbsp; Delete Account
                                </a>

                            </div>
                            
                        </div>
                        <!-- End Link -->
                    </div>
                </div>

                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h3 class="text-capitalize my-4 card-title">
                            read more about settings
                        </h3>
                        <p class="py-3 card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection