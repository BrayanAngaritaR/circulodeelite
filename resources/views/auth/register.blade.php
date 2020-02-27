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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!--Name-->
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{__('Name')}}" autofocus>

                                <!--Email-->
                                <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{__('E-Mail Address')}}">

                                @error('email')
                                    <p class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror

                                <!--Password-->
                                <input type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{__('Password')}}">

                                <input id="password-confirm" type="password" class="form-control mt-2" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Confirm Password')}}">

                                <button type="submit" class="contact_button">{{__('Register')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection
