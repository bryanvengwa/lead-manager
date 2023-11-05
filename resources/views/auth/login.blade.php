<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fonts/poppinsFont/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-css/login.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/poppinsFont/stylesheet.css')}}">
    <title>Login</title>

</head>
<body>
<x-auth-session-status class="mb-4" :status="session('status')" />
<br><br>
<div class="register-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 register-body" >
                <br>
                <br>
                <br>
                <div class="logo-container">
                    <img src="{{asset('images/login-logo.png')}}" alt="">
                </div>
                <br><br>
                <div class="form-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email">Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <input type="email" class="form-control" name="email" id="email">
                        <br>
                        <label for="password">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <input type="password" class="form-control" name="password" id="email">
                        <br><br>
                        <div class="flex-container">
                            <div class="flex-container">
                                <a href="{{ route('register') }}">Don't have an account ? Register</a>
                                <br>
                                <a href="{{ route('password.request') }}">Forgot your password ?</a>
                                <br>
                            </div>
                            <button type="submit" >Log in</button>
                            <br><br><br>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{asset('images/login-girl.png')}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
