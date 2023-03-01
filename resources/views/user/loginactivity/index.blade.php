@extends('layouts.app')
@section('title','Login activity')
@section('content')
        <div class="container">
            <div class="row gx-3 gy-1 py-5 my-5">
                <div class="col-md-6 py-4">
                    <div>
                        <h3 class="display-5 text-capitalize my-4 px-3 card-title">
                            Last login activity
                        </h3>
                        <div class="table-responsive fw-light bg-white my-4 px-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ip</th>
                                        <th>Browser</th>
                                    </tr>
                                </thead>
                                @foreach($loginActivity as $key => $userloginActivity)
                                <tbody>
                                    <tr>
                                        <td> {{ $userloginActivity->id ?? '' }}</td>
                                        <td>{{ $userloginActivity->ip_address ?? '' }}</td>
                                        <td>{{ $userloginActivity->user_agent ?? '' }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-4">
                    <div class="p-3">
                        <h1 class="display-5 text-capitalize my-4 card-title">
                            What is login activity ?
                        </h1>
                        <p class="px-2 py-3 card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Eu facilisis sed odio morbi quis 
                            commodo odio aenean sed. Sed blandit libero volutpat sed cras. Libero id faucibus nisl 
                            tincidunt eget nullam non. Auctor urna nunc id cursus metus aliquam eleifend mi in.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection