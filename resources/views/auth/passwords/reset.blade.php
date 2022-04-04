@extends('layouts.app')
@section('content')

<br />
<br />

    <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">>{{ __('Reset Password') }}</b></div><br />

    <div class="main-container w3-center border-center">
        <div class="main w3-center" style="font-size: 150%;">

                <br />
                <br />
                <br />
                            
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <b class=""><i>{{ __('E-Mail Address') }}:</i></b>
                    <br />

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus style="width:60%">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                            <br />
                            <br />
                            <b class=""><i>{{ __('Password') }} :</i></b>
                            <br />

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="width:60%">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                            <br />
                            <br />
                            <b class=""><i>{{ __('Confirm Password') }}:</i></b>
                            <br />


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="width:60%">

             
                            <br />
                            <br />
                            <input type="submit" value="RESET PASSWORD" class="submit-btn w3-round-xxlarge"></input>
                            
                </form>
                                
                    
                                <br />
                                <br />
                                <br />
        </div>
    </div>
            

@endsection
