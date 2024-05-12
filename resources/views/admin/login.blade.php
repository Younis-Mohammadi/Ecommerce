<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.png')}}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        @include('admin.message')
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">
                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#"
                                            class="noble-ui-logo logo-light d-block mb-2">Top<span>Dev</span></a>
                                        <h5 class="text-white fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                        <form method="post" action="{{route('admin.authenticate')}}"
                                            class="forms-sample">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label text-white">Email
                                                    address</label>
                                                <input type="email" name="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <p class="invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label text-white">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    autocomplete="current-password" placeholder="Password"
                                                    value="{{ old('password') }}">
                                                @error('password')
                                                    <p class="invalid-feedback">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="authCheck">
                                                <label class="form-check-label text-white" for="authCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary me-2 mb-2 mb-md-0 text-white">submit</button>
                                            </div>
                                            <a href="register.html" class="d-block mt-3 text-white">Not a user? Sign
                                                up</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin_assets/vendors/core/core.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/template.js')}}"></script>
</body>

</html>