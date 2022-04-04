@extends('layouts.app')

@section('content')


<br />
<br />


            <!--MAIN-->
                                <div class="w3-center"><b class="w3-text-grey" style="font-size: 250%;">SIGN UP</b></div><br />
            <div class="main-container w3-center border-center">
                    <div class="main w3-center w3-round-xxxlarge" style="font-size: 150%;">
                    
                                <br />
                                <br />
                                <br />
                                
                                
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/Form-data">
                                    @csrf
                                        <b class=""><i>Name :</i></b>
                                        <br />
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <br />
                                        <br />
                                        <b class=""><i>Phone no. :</i></b>
                                        <br />
                                        <input type="number" placeholder="Enter your mobile number" class="@error('phonenumber') is-invalid @enderror"  name="phonenumber" required></input>

                                        @error('phonenumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
 
                                        <br />
                                        <br />
                                        <b class=""><i>Email :</i></b>
                                        <br />
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror




                                        <br />
                                        <br />
                                        <b class=""><i>Location :</i></b>
                                        <br />
                                        <select name="location" class="@error('location') is-invalid @enderror" style="width:36%;" required>
                                            <option value="main">Main Campus</option>
                                            <option value="jos">Jos Campus</option>
                                        </select>
                                        <!--<input type="text" placeholder="Enter your location" name="location" class="@error('location') is-invalid @enderror"  required></input>-->

                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <br />
                                        <br />
                                        <b class=""><i>Department :</i></b>
                                        <br />
                                        <input type="text" placeholder="Enter your department" name="department" class="@error('department') is-invalid @enderror"  required></input>

                                        @error('department')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror





                                        <br />
                                        <br />
                                        <b class=""><i>Password :</i></b>
                                        <br />
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter a password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror



                                        <br />
                                        <br />
                                        <b class=""><i>Comfirm Password :</i></b>
                                        <br />
                                        <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm your password">

                                        <br />
                                        <br />
                                        
                                        <input type="submit" value="SIGN UP" class="submit-btn w3-round-xxlarge"></input>
                                        
                                        <br />
                                        <br />
                                        <i>Already a member?<a href="/login" class="btn-link"><i>login</i></a></i>
                                </form>
                                
                                
                                <br />
                    </div>
            </div>
            
            
            





<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
