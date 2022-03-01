@extends('layouts.app')
    @section('content')

    @php
        use App\Http\Controllers\Controller;
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\ReviewsController;

    @endphp


            
            <!--PROFILE-->
            <br />
            <br />
            <br />
            <!--PROFILE-->
            <div class="categories-container w3-center border-center">
                    <div class="categories">
                    
                    
                            <div class="profile-container">

                                    <img src="/storage/profilepix/{{ Auth::user()->profile_image }}" class="w3-circle w3-border-large" style="height:500px;" id=""></img>
                                    <br />
                                    <br />

                                    <form action="{{action('App\Http\Controllers\HomeController@changepix')}}" method="POST" style="" enctype="multipart/Form-data">
                                    {{method_field('POST')}}
                                    @csrf
                                
                                        <div class=""><b><i>
                                            <input type="file" name="image" class="w3-border w3-text-white"></input><input type="submit" value="Change Profile Pic" class="w3-text-blue w3-round"></input>
                                        </i></b></div>

                                    </form>
                            </div>
                    </div>
            </div>
            
            <!--<br />
            <div class="w3-border"></div>
            <br />-->
            <br />
            <!--MAIN-->
            <div class="main-container w3-center border-center">
                    <div class="main w3-center borders-center w3-round-xxxlarge w3-text-black">

                                <br />
                                        <b class="w3-left w3-text-black"><i>@php echo strtoupper($user->name); @endphp</i></b>
                                        
                                        <br />
                                        <i><b class="">Location: <span class="w3-text-blue">{{$user->location}} <a href="#"><i class="fa fa-edit"></i></a></span></b></i>
                                        <br />
                                        <!--<i><b class="w3-xxlarge">Last Seen: <span class="w3-text-blue">3hrs ago</span></b></i>
                                        <br />-->
                                        <i><b class="">Number: <span class="w3-text-blue">234{{$user->phonenumber}}<span class="fa fa-edit"></span></span></b></i>
                                        
                                        
                                        <br />
                                        <br />
                                        <div class="w3-border borderlng"></div>
                                            <b><a href="#"><i class="">My ads <i class="w3-text-red">9</i></i></a></b>
                                        <div class="w3-border borderlng"></div>
                                            <b><a href="#"><i class="">Message <i class="w3-text-red">11</i></i></a></b>
                                        <div class="w3-border borderlng"></div>
                                            <b><a href="#"><i class="">Notifications <i class="w3-text-red">31</i></i></a></b>
                                        <div class="w3-border borderlng"></div>
                                        
                                        
                                        <br />
                                        <a href="#"><b class="w3-text-red"><u>PLACE ADS</u></b></a>

                                        <!--SIGN OUT-->
                                        <a href="/logout" style="font-size:80%;"><b class="w3-text-blue"><u>(SIGN OUT)</u></b></a>
                                        <br />
                                
                                        <div class="w3-border borderlng"></div>
                                        <br />
                                
                                
                               
                                
                                @if(count($products)>=1)
                                    @foreach($products as $product)
                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
                                                        <img src="/storage/product/{{$product->image1}}" alt="" class="product-img w3-round w3-margin"></img>
                                                        <br />
                                                        <br />
                                                        <a href="/products/{{$product->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$product->name}}</i>
                                                            <br /><i style="">{{$product->description}}</i>
                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge">&#8358;{{$product->price}}</div></b></a>

                                                            <div class="">
                                                                <form action="/products/{{$product->id}}" class="" method="POST">
                                                                    {{method_Field('DELETE')}}
                                                                    @csrf

                                                                    <a href="/products/{{$product->id}}/edit" class="w3-display-bottom w3-text-blue"><u>(Edit)</u></a>

                                                                    <input type="submit" value="(Delete)" style="border:none; background-color:#DFDFDF;" class="w3-display-bottom w3-text-blue" ></input>
                                                                </form>
                                                            </div>
                                                </div>
                                            <br />
                                    @endforeach
                                @endif
                                
                                
                                <!--SUGGESTION-->
                                <br />
                                <div class="w3-border borderlng"></div>
                                <div class="">
                                        <b class="">SUGGESTION</b>
                                        <form class="w3-padding w3-center">
                                                    <div class="" style=""><input type="text" name="" placeholder="suggest to improve this platform" class="w3-border"></input>
                                                    <span><input type="submit" value="submit"></input></span></div>
                                            </form>
                                </div>
                    

                    

                    </div>
            </div>
            
            
            
            

    @endsection
