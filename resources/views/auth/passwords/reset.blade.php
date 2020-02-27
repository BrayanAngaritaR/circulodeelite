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
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <!--Email-->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror

                                <!--Password-->

                                <input id="password" type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{__('Password')}}">

                                <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Confirm Password')}}">

                                @error('password')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror


                                <button type="submit" class="contact_button">{{__('Reset Password')}}</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection
