<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link href="{{ ('template/assets/img/logo9.png') }}" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>


<x-guest-layout>
    <style type="text/css">
        .min-h-screen {
            background-color: white;
        }

        x-auth-card {
            border-radius: 0;
        }
    </style>
    <div class="row">
        <div class="col-md-5 m-0 p-0">

            <img class="img-fluid" src="/login_asset/kiri.png" alt="">

        </div>
        <div class="col-md-7 m-0 p-0">
            <x-auth-card class="col-md-6 m-0 p-0">
                <x-slot name="logo">

                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="mt-4 d-flex justify-content-center ">
                
            <img class=" justify-content-center" style="width:50%;height:auto" src="/login_asset/logo.png" alt="">
                
        </div>
        <div><br><br></div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                
                    <!-- Email Address -->
                    <div>
                        <x-input style="border-radius: 0;background-color: #F2EBEB;color:black;" id="email" placeholder="Enter Username ..." class="w-full popin uname noborder" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input style="border-radius: 0;background-color: #F2EBEB;color:black;" id="password" class="w-full popin pw noborder" placeholder="Enter Password ..." type="password" name="password" required autocomplete="current-password" />
                    </div>
    
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    
                    
                    <div class="mt-4">
                    <input type="image" class="btimg " src="/login_asset/login_btn.png">

                    </div>
                    <div class="mt-4 mids">
<p >Don't have an account? <a class="toa" href="{{ route('register') }}">Register now!</a></p></div>
                </form>
            </x-auth-card>
        </div>
    </div>

</x-guest-layout>