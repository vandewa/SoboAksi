<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Sobo Aksi">
    <meta name="keywords" content="sobo aksi">
    <meta name="author" content="SOBO AKSI">
    <title>Login Sobo Aksi</title>
    <link rel="apple-touch-icon" href="{{ asset('stack-admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('stack-admin/app-assets/images/ico/favicon.ico')}}
    ')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/app-assets/css/pages/login-register.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('stack-admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    @vite([])
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        section{
            background: url({{asset('stack-admin/app-assets/images/png/human.png') }});
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }
        .form-container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 380px;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow:7px 7px 60px #000;
        }
        /* h1{
            color: #ffffff;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
        } */
        .control input{
            padding: 10px;
            font-size: 16px;
            display: block;
            width: 100%;
            color:#000;
            background: #ddd;
            outline: none;
            border: none;
            margin: 1em 0;

        }         
        .control .btn{
            color: #fff;
            text-transform: uppercase;
            background: crimson;
            opacity: .7;
            transition:opacity .3s ease;
        }
        .btn:focus{
            opacity: 1;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #fff;
            opacity: .7;
        }
        a:hover{
            opacity: 1;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-container">
            <div class="card-title text-center col-12">
                <img src="{{ asset('stack-admin/app-assets/images/png/soboaksi.png')}}" width="100%">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="control">
            {{-- <label for="name" style="color: black;">Name</label> --}}
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="control">
            {{-- <label for="psw">Password</label> --}}
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
            name="password" required autocomplete="current-password" placeholder="Enter Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <span style="color: black;"><input type="checkbox" id="remember-me" class="chk-remember"> Remember me</span>
            <div class="control">
            <input type="submit" class="btn" value="Login">
            </div>
        </form>
        {{-- <p ><a href="recover-password.html" style="color: black;">Forget password ?</a></p> --}}
        </div>
    </section>

    
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('stack-admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('stack-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('stack-admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('stack-admin/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('stack-admin/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>