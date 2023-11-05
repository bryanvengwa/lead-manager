<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fonts/poppinsFont/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-css/login.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/poppinsFont/stylesheet.css')}}">
    <title>register</title>

</head>
<body>
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
                <div class="form-container" >
                    <form method="POST" action="{{ route('register') }}" id="register-form">
                        @csrf
                        <div class="input-container">
                            <div class="inner" >
                                <label for="first_name">First Name</label>
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                <input type="text" class="form-control" name="first_name" id="first_name" required >
                            </div>
                            <br>
                            <div class="inner" >
                                <label for="middle_name">Middle Name</label>
                                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                                <input type="text" class="form-control" name="middle_name" id="middle_name" >
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="last_name">Last Name</label>
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            <input type="text" class="form-control" name="last_name" id="last_name" required>
                        </div>
                        <br>
                        <div>
                            <label for="email">Email</label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <br>
                        <div>
                            <label for="password">Password</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <br>
                        <div>
                            <label for="cpassword_confirmation">Password</label>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                        </div>
                        <br><br>

                        <div class="flex-container">
                            <a href="{{ route('login') }}">Already Registered ?</a>
                            <button type="submit" >Register</button>
                        </div>

                        <br><br><br>


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



