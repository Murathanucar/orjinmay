<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orjinmay Admin Dashboard</title>
        <!-- Styles -->
        @include('admin.partials.styles')
    </head>
    <body class="boxed-size bg-white">
        @include('admin.partials.preloader')

        <div class="container">
            <div class="main-content d-flex flex-column p-0">
                <div class="m-auto m-1230">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{ asset('frontend/assets/images/logo-orjinmay.png') }}" class="rounded-3" alt="register">
                        </div>
                        <div class="col-lg-6">
                            <div class="mw-480 ms-lg-auto">
                                <a href="index" class="d-inline-block mb-4">
                                </a>
                                <h3 class="fs-28 mb-2">Register to Orjinmay Dashboard</h3>
                                <p class="mb-4">Create an account to access the Orjinmay dashboard.</p>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="flex-grow-1 border-top"></div>
                                    <div class="flex-grow-1 border-top"></div>
                                <form method="POST" action="{{ route('admin.register.submit') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="label text-secondary">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label text-secondary">Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="example@orginmay.com" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label text-secondary">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Type password" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label text-secondary">Password Confirmation</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                                            <div class="d-flex align-items-center justify-content-center py-1">
                                                <i class="material-symbols-outlined text-white fs-20 me-2">person_4</i>
                                                <span>Register</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <p>By confirming your email, you agree to our <a href="terms-conditions" class="fw-medium text-decoration-none">Terms of Service</a> and that you have read and understood our <a href="privacy-policy" class="fw-medium text-decoration-none">Privacy Policy</a>.</p>
                                        <p>Already have an account. <a href="{{ route('admin.login') }}" class="fw-medium text-primary text-decoration-none">Log In</a></p>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            {{ $errors->first() }}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="theme-settings-btn p-0 border-0 bg-transparent position-absolute" style="right: 30px; bottom: 30px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <i class="material-symbols-outlined bg-primary wh-35 lh-35 text-white rounded-1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings">settings</i>
        </button>

        
        @include('admin.partials.theme_settings')
        @include('admin.partials.scripts')
    </body>
</html>
