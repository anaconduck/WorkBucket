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

        <h1 class="popin mid">COMPLETE REGISTRATION</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ url('/completereg') }}">
            @csrf
            <div class="divnone">
                <br>
            </div>
            <!-- Name -->
            <div class="divnone">

                <x-input class="popin " style="border-radius: 0;background-color: #F2EBEB;" id="bday" placeholder="Birthday" class="block mt-1 w-full" type="date" name="bday" value="<?php echo date('Y-m-d'); ?>" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
            <label for="male">Gender</label><br>
                <x-input class="popin "  id="male" placeholder="Gender" type="radio" name="gender" value="male" required />
                <label for="male">Male</label>
                <x-input class="popin "  id="female" placeholder="Gender"  type="radio" name="gender" value="female" required />
                <label for="female">Female</label>
                <x-input class="popin " id="other" placeholder="Gender" type="radio" name="gender" value="other" required />
                <label for="other">Other</label>
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input class="popin " style="border-radius: 0;background-color: #F2EBEB;" id="phone" class="block mt-1 w-full" placeholder="Phone" type="number" name="phone" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-input class="popin" style="border-radius: 0;background-color: #F2EBEB;" id="address" class="block mt-1 w-full" placeholder="Address" type="text" name="address" required />
            </div>

            <div class="mt-4">

                <x-input class="popin" style="border-radius: 0;background-color: #F2EBEB;" id="motto" class="block mt-1 w-full" placeholder="Motto" type="text" name="motto" required />
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
            

        </form>

    </x-auth-card>
</x-guest-layout>