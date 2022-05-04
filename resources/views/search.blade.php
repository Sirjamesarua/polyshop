@extends('layouts.app')
    @section('content')




			<!--VIEWED CATEGORIZE-->

			<!--BACK BTN-->
            <div class="w3-margin"><center><a href="{{ url()->previous() }}" class="btn btn-default" style="color:blue; font-size: 145%;"><span class="fa fa-arrow-left"></span><u>Back</u></a></center></div>

			
			<!--MAIN-->
			<div class="main-container w3-center border-center w3-text-black">
					<div class="main w3-center borders-center w3-round-xxxlarge" style="font-size: 150%;">
					
								<br />
										<b class="w3-left w3-text-black">@php echo strtoupper("search Result"); @endphp</b>
												
										<div class="w3-border borderlng"></div>
												<form class="filterform">
														<select class="filterselect w3-border-white w3-border-large w3-padding">
																<option value="" selected>Filter</option>
																<option value="">Recent</option>
																<option value="">Low-High</option>
																<option value="">High-Low</option>
																<!--<option value="">Newest</option>
																<option value="">Newest</option>-->
														</select>
												</form>
										<div class="w3-border borderlng"></div>
										
								<br />
								



                                @if(count($searchproducts)>=1)
                                    @foreach($searchproducts as $searchproduct)
                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
                                                        <img src="/storage/product/{{$searchproduct->image1}}" alt="" class="product-img w3-round w3-margin"></img>
                                                        <br />
                                                        <br />
                                                        <a href="/products/{{$searchproduct->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$searchproduct->name}}</i>
                                                            <br /><i style="">{{$searchproduct->description}}</i>
                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge"><b style="background-color: #dfdfdf;" class="w3-round-xlarge">&#8358;{{$searchproduct->price}}</b></div></b></a>
                                                </div>
                                            <br />
                                    @endforeach
                                @else
                                    <div>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <center><b style="font-size: 120%;"><i>NO PRODUCT FOUND</i></b></center>
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                        <br />
                                    </div>
                                @endif
                               
                    </div>
            </div> 

    @endsection