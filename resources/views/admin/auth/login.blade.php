@extends('layout.login_layout')
@section('admin_content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class=" position-relative adminLoginBg overflow-hidden -radial-gradient min-vh-100 d-flex align-items-center justify-content-center"
            style="background: url('{{ asset('assets/images/vdc-admin-login-bg.webp') }}') no-repeat center center / cover; backdrop-filter: blur(40px);">
            <div class="d-flex align-items-center justify-content-center w-100 z-3">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-0 border-0 pb-4">
                                    <img src="{{ asset('frontend/vdc_images/vdc-logo.png') }}" style="height: 20px;" />
                                    <span class="px-2 opacity-5">|</span>
                                    <span class="text-warning" style="font-weight: bold;">Admin Login</span>
                                </div>
                                <form action="{{ route('admin.login.store') }}" class="user" method="post">
                                    @csrf
                                    <div class="mb-3">

                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
