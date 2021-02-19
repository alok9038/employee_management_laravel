{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>EMS || Login</title>
</head>
<body class="" style="background:url('https://mumgi.in/assets/img/various/bg-design.png') no-repeat fixed ; background-size:cover; background-color:#808e95ab ">
    <div class="container" >
        <div class="row">
            <div class="container">
                <div class="col-lg-5 col-10 mx-auto" style="height: calc(100% - 100px)!important; margin-top:100px;">
                    <div class="card border-0 bg-transparent" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); border-radius:25px;">
                        
                        <div class="card-body">

                            @error('email')
                            <div class="alert alert-danger" style="border-radius:25px 25px 0 0 ;">{{ $message }}</div>
                            @enderror
                            <form method="POST" action="{{ route('login') }}" class="py-3">
                                @csrf
                    
                                <div>
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="border-end-0 input-group-text bg-white"><i class="fa fa-user"></i></span>
                                        <input id="email" class="border-start-0 @error('email') is-invalid @enderror shadow-none form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                                </div>
                    
                                <div class="mt-4">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text border-end-0 bg-white"><i class="fa fa-key"></i></span>
                                        <input id="password" class="shadow-none border-start-0 @error('password') is-invalid @enderror form-control" type="password" name="password" required autocomplete="current-password" />
                                
                                    </div>
                                    </div>
                    
                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <input type="checkbox" id="remember_me" class="form-check-input" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                    
                                <div class="d-flex items-center justify-content-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none small mt-2 text-muted hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    <button class="btn btn-secondary ms-4">
                                        Log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>