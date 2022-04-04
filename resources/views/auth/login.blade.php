@extends('layouts.app')
    @section('content')


<br />
<br />

            <!--MAIN-->
                                <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">{{ __('Login') }}</b></div><br />
            <div class="main-container w3-center border-center">
                    <div class="main w3-center w3-round-xxxlarge" style="font-size: 150%;">
                    
                                <br />
                                <br />
                                <br />
                                
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                        <b class=""><i>{{ __('E-Mail Address') }}:</i></b>
                                        <br />
                            
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:60%" placeholder="Enter Your Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                                                  

                                        <br />
                                        <br />
                                        <b class=""><i>{{ __('Password') }} :</i></b>
                                        <br />
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width:60%" placeholder="Enter Your Password">
                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <br />
                                        <br />
                                        <input type="submit" value="LOGIN" class="submit-btn w3-round-xxlarge"></input>
                                        
                                        <br />
                                        <br />
                                        <i>new member?<a href="/register" class="btn-link"><i>sign up</i></a></i>
                                        <br />
                                        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
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
