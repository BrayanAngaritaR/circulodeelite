@extends('app')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/contact_responsive.css')}}">
@endpush

@section('content')

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" style="background-image: url({{ asset('assets/images/post_nosidebar.jpg')}});" data-speed="0.8"></div>
    <div class="home_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!-- Post Comment -->
                    <div class="post_comment">
                        <div class="contact_form_container">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!--Email-->
                                <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{__('E-Mail Address')}}" autofocus>

                                @error('email')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror

                                <!--Password-->
                                <input id="password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{__('Password')}}">

                                @error('password')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror



                                <button type="submit" class="contact_button">{{__('Login')}}</button>

                                <div class="text-center mt-4">
                                    <a class="btn btn-link text-dark" href="{{ route('register') }}">
                                        {{ __('Sign up') }}
                                    </a>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="text-center mt-4">
                                        <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection
