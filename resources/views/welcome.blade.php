@extends('layouts.app')
    @section('content')
            <!--CATEGORIES-->
            <div class="categories-container w3-center border-center">
                    <div class="categories">
                        <br />
                    
                            <div class="w3-row">
                                        <div class="cat w3-col w3-round-xlarge w3-padding-xxxlarge" style="width:29%;">
                                                    <br />
                                                    <br />
                                                    <div class=""><a href="/tech/menu"><i class="fa fa-laptop fa-4x w3-text-red"></i></div>
                                                    <div class=""><b class=" w3-text-red">TECH.</b></a></div>
                                        </div>
                                        
                                        <div class="cat w3-col w3-round-xlarge" style="width:29%;">
                                                    <br />
                                                    <br />
                                                    <div class=""><a href="/fashion/menu"><i class="fa fa-television fa-4x w3-text-red"></i></div>
                                                    <div class=""><b class=" w3-text-red">FASHION</b></a></div>
                                        </div>
                                        
                                        <div class="cat w3-col w3-round-xlarge" style="width:29%;">
                                                    <br />
                                                    <br />
                                                    <div class=""><a href="/education/menu"><i class="fa fa-book fa-4x w3-text-red"></i></div>
                                                    <div class=""><b class="w3-text-red">EDUCATION</b></a></div>
                                        </div>
                            </div>
                            
                            <br />
                            <div class="w3-row">
                                        <div class="cat w3-col w3-round-xlarge" style="width:29%;">
                                                    <br />
                                                    <br />
                                                    <div class=""><a href="/electronic/menu"><i class="fa fa-headphones fa-4x w3-text-red"></i></div>
                                                    <div class=""><b class="w3-text-red">ELECTRONIC</b></a></div>
                                        </div>
                                        
                                        <div class="cat w3-col w3-round-xlarge" style="width:29%;">
                                                    <br />
                                                    <br />
                                                    <div class=""><a href="/service/menu"><i class="fa fa-desktop fa-4x w3-text-red"></i></div>
                                                    <div class=""><b class="w3-text-red">SERVICES</b></a></div>
                                        </div>
                                        
                                        <div class="cat w3-col w3-round-xlarge" style="width:29%;">
                                                    <div class=""><a href="/others/menu"><i class="w3-text-red" style="font-size: 300%;">...</i></div>
                                                    <div class=""><b class="w3-text-red">OTHERS</b></a></div>
                                        </div>
                            </div>
                            
                    </div>
            </div>
            
            
            <br />
            <div class="w3-border"></div>
            <br />
            
            <!--ADS-->
            <div class="ads-container border-center w3-center">
                    <div class="ads w3-round-xlarge"><b class="w3-text-black">Place Your Ads</b></div>
            </div>
            
            <br />
            <div class="w3-border"></div>
            <br />
            
            
            
            <!--TRENDING-->
            <!--MAIN-->
            <div class="main-container w3-center border-center">
                    <div class="main w3-center borders-center w3-round-xxxlarge" style="font-size: 115%;">
                    
                                <br />
                                        <b class="w3-left w3-text-black">TRENDING</b>
                                <br />
                                        
                                <!--DISCLAIMER-->
                                        <div class="w3-border borderlng"></div>
                                        <div class="w3-center disclaimer" style="width:80%;">
                                                <b class="w3-text-red"><u>WARNING :</u><i>do not make any payment before receiving product,,always meet the seller in a safe and open place</i></b>
                                        </div>
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
                                                </div>
                                            <br />
                                    @endforeach
                                @else
                                    <div>
                                        <br />
                                        <br />
                                        <br />
                                        <center><b><i>NO PRODUCT YET</i></b></center>
                                        <br />
                                        <br />
                                        <br />
                                    </div>
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