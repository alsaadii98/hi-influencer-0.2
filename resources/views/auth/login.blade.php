@extends('layouts.app')

@section('content')
<div class="bg-gray-200 ">
    <div class="row flex justify-center items-center">
        <div class="bg-white p-5 box-rounded3 shadow-xl">
            <div class="text-3xl flex justify-center items-center ">
                
                {{-- {{ __('Login') }} --}}
                <img src="../imgs/LOGO HI Influencers.svg" class="w-7 " alt="">
            </div>
                <div class="mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- Email --}}
                        <div class="flex flex-col space-y-2 ">
                                <label for="email" class="text-sm text-gray-500">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror  p-3 w-60 rounded-lg outline-none focus:ring-2 focus:ring-red-400" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Password --}}
                        <div class="mt-2">
                                 <label for="password" class="text-sm text-gray-500">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror p-3 w-60 rounded-lg outline-none focus:ring-2 focus:ring-red-400" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Remember me --}}
                        <div class="my-3">
                            
                            <div class=" flex space-x-2 items-center">
                                <input class="w-5 h-5  outline-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="text-sm" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            
                        </div>
                        {{-- Submit-btn --}}
                        <div class="">
                            <div class="flex flex-col space-y-3 ">
                                    <button type="submit" class="bg-red-500 px-7 py-3 rounded-xl text-white text-lg hover:bg-red-600 hover:transition duration-300 ease-in-out ">
                                        {{ __('Login') }}
                                        {{-- btn btn-primary --}}
                                    </button>
                                {{-- <div class="text-center">
                                    @if (Route::has('password.request'))
                                    <a class="text-sm" href="{{ route('password.request') }}"></a>
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div> --}}
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
