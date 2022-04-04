@extends('layouts.app')
    @section('content')


        <br />
        <br />

            <!--MAIN-->
        <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">{{ __('Verify Your Email Address') }}}</b></div><br />

        <div class="main-container w3-center border-center">
            <div class="main w3-center w3-round-xxxlarge" style="font-size: 150%;">
        
                    <br />
                    <br />
                    <br />
                                
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                                
        
                    <br />
                    <br />
                    <br />
            </div>
        </div>


    @endsection
