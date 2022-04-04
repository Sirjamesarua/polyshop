@extends('layouts.app')
@section('content')

    <br />
    <br />

    <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">{{ __('Reset Password') }}</b></div><br />

    <div class="main-container w3-center border-center">
        <div class="main w3-center" style="font-size: 150%;">
    
                <br />
                <br />
                <br />
                            
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                        <b class=""><i>{{ __('E-Mail Address') }}:</i></b>
                        <br />

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:60%">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <br />
                        <br />
                        <input type="submit" value="Send Password Reset Link" class="submit-btn w3-round-xxlarge"></input>
                        
                </form>
                            
        
                    <br />
                    <br />
                    <br />
        </div>
    </div>
            

@endsection
