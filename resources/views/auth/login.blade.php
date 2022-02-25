@extends('layout')
@section('content')
<section class="login-1">
    <div class="container">
         <div class="row justify-content-center align-items-center" style="height: 100vh;">
             <div class="col-md-7">
                <p class="text-center"><strong>Choose a job that you like and you will not have to work a day of your life</strong></p>
                             <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('login') }}">
                    <h1>Log In</h1>
                        @csrf

                        <!-- Email Address -->
                        <div>
                            

                            <x-input id="email" class="block mt-1 w-full w-100" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            

                            <x-input id="password" class="w-100 block mt-1 w-full"
                                            type="password"
                                            placeholder="Contraseña"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>
                        <div class="flex items-center justify-content-center d-flex mt-4">
                            <x-button class="btn btn-login">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                        <p class="text-center mt-4 pt-4">You are new to zig - works? <a href="{{ url('/candidate-register') }}">Join now</a></p>
                    </form>  
                   </div>
                </div>             
             </div>
         </div>
     </div>
</section>
@endsection