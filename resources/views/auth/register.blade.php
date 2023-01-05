<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ ('template/assets/img/logo9.png') }}" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/register_asset/style.css">
</head>
<x-guest-layout>
    <style type="text/css">
        .min-h-screen {
            background-image: url('register_asset/regbg.png');
            background-size: cover
        }

        x-auth-card {
            border-radius: 0;
        }
    </style>
    <x-auth-card style="border-radius: 0;" class="divnone">
        <x-slot name="logo">

        </x-slot>

        <h1 class="popin mid">CREATE ACCOUNT</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="divnone">
                <br>
            </div>
            <!-- Name -->
            <div class="divnone">

                <x-input class="popin " style="border-radius: 0;background-color: #F2EBEB;" id="name" placeholder="Full Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">

                <x-input class="popin " style="border-radius: 0;background-color: #F2EBEB;" id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input class="popin " style="border-radius: 0;background-color: #F2EBEB;" id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-input class="popin" style="border-radius: 0;background-color: #F2EBEB;" id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm password" type="password" name="password_confirmation" required />
            </div>

            <div class="mids  mt-4">



                <div class="mids mt-4">


                    <input type="checkbox" required><label class="popin ml-4">I agree to all statements in <a class="tologina" href="{{ url('/terms') }}">Terms of Service</a>
                    </label>


                </div>
            </div>
            <div class="divnone">
                <br>
            </div>
            <div class="mt-4">

                <input type="image" class="btimg " src="/register_asset/signup_btn.png">
            </div>
            <div class="divnone">
                <br>
            </div>
            <div class="mt-4">
                <p class="mids">Already Have an account ? <a class="tologina" href="{{ route('login') }}">Login here</a></p>

            </div>

        </form>

    </x-auth-card>
</x-guest-layout>