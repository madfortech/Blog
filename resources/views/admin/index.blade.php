@extends('layouts.admin')
@section('title', 'Admin Homepage')
@section('content')
 
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Admin Dashboard</h3>
                    </div>
                    <div class="row">
                        
                        <!-- users count -->
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                                <span>users</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <span>18</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
         
@endsection
