@extends('layouts.app')
    @section('content')


<br />
<br />

            <!--MAIN-->
        <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">{{ __('Confirm Password') }}</b></div><br />

        <div class="main-container w3-center border-center">
            <div class="main w3-center w3-round-xxxlarge" style="font-size: 150%;">
                    
                    <br />
                    <br />
                    <br />
                    
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                            <b class=""><i>{{ __('Password') }}:</i></b>
                            <br />
                        
                            <center><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width:60%"></center>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <br />
                            <br />
                            <b class=""><i>{{ __('Confirm Password') }} :</i></b>
                            <br />

                            @if (Route::has('password.request'))
                                <a class="submit-btn w3-round-xxlarge" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                    </form>
                                
                    
                                <br />
                                <br />
                                <br />
                </div>
            </div>
            


@endsection
