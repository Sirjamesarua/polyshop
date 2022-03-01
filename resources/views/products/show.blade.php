@extends('layouts.app')
    @section('content')

    @php
    	use App\Http\Controllers\Controller;
    	use App\Http\Controllers\ReviewsController;

    @endphp



			<!--VIEWED PRODUCT-->
			<br />
			<!--MAIN-->
			<div class="main-container w3-center border-center">
					<div class="main w3-center borders-center w3-round-xxxlarge">
					
					
					
							<!--PRODUCT IMG-->
							<br />
							<div class="viewedproductimg-container">
									<img src="/storage/product/{{$product->image1}}" alt="" class="viewedproductimg"></img>
							</div>
							<br />
			
			
			
								<br />
										<b class="w3-left w3-text-grey">FEATURES</b>
										
										<div class="w3-border borderlng"></div>
												<b class=""><i>Name :<br /><span class="w3-text-grey">{{$product->name}}</span></i></b>
												<br />
												<b class=""><i>Price : <span class="w3-text-grey">{{$product->price}}</span></i></b>
												<br />
												<b class=""><i>Location : <span class="w3-text-grey">{{$user->location}}</span></i></b>
												<br />
												<b class=""><i>Seller : <a href="/{{$user->id}}/{{$user->name}}/profile" class="w3-text-blue">{{$user->name}}</a></i></b>
												<br />
												<b class=""><i>Description :<br /> <span class="w3-text-grey">{{$product->description}}</span></i></b>
												<br />
												<b class=""><i>Product images :</i></b>
												<div class="w3-padding viewproductimg-div">
													<div><img src="/storage/product/{{$product->image1}}" style="" class="viewproductimg"></img></div>
													<div><img src="/storage/product/{{$product->image2}}"  class="viewproductimg"></img></div>
													<div><img src="/storage/product/{{$product->image3}}"  class="viewproductimg"></img></div>
												</div>
												<br />
												<b class=""><i>Reviews :</i></b>
												
												<!--REVIEW DISPLAY-->

												<div class="">
													<hr />
													<!--review authur name-->
													<div class="">
														<b class="w3-text-black">James</b>
													</div>
													<!--review content-->
													<div class="">
														<i class="w3-text-grey">this product is the best i have ever seen in my life and the seller delivers fast</i>
													</div>
												</div>



                                			@if($reviews->isNotEmpty())
												@foreach($reviews as $review)
        
		        										@php
		        											$reviewsAuthurs= DB::table('users')->where('id',$review->Authur_id)->get();
		        										@endphp

														@foreach($reviewsAuthurs as $reviewsAuthur)
														<div class="">
															<hr />
															<!--review authur name-->
															<div class="">
																<b class="w3-text-black">{{$reviewsAuthur->name}}</b>
															</div>
															<!--review content-->
															<div class="">
																<i class="w3-text-grey">{{$review->content}}</i>
															</div>
														</div>
														@endforeach
													
												@endforeach
											@endif





												<!--CHAT/ADD TO FAVOURITE BTN-->
												<br />
												<span>
														<form class="" method="POST" action="{{route('addfavourite')}}" enctype="multipart/Form-data">
														{{method_Field('POST')}}
														@csrf
															<a href="#"><button class="w3-round-large w3-text-white" style="background-color:blue;font-size:150%;">Contact Seller</button></a>


															<input type="hidden" value="{{$product->id}}" name="product-id"></input>
															<button type="submit" class="w3-round-large w3-padding w3-text-white" style="background-color:blue;font-size:150%;"><i class="fa fa-star"></i></button>

														</form>

												</span>
												<br />
												
												<b class="w3-text-red"><u>REPORT PRODUCT</u></b>
												
												
										<div class="w3-border borderlng"></div>
										
								
								<!--WRITE REVIEW-->
								<div class="">
										<div class="">
												<form class="w3-padding" method="POST" action="{{route('createreview')}}" enctype="multipart/Form-data">
													{{method_Field('POST')}}
													@csrf
														<input type="text" name="review" placeholder="Write a review"></input>
														<input type="hidden" name="product_id" value="{{$product->id}}"></input>
														<input type="submit" value="Submit"></input>
												</form>
										</div>
								</div>
								
										<div class="w3-border borderlng"></div>
								
								<!--SELLER-->
								<div class="">
										<div class="">
												
										</div>
								</div>
								
								
								<br />
										<b class="w3-left w3-text-grey">Related</b>


                                @if(count($relatedproducts)>=1)
                                    @foreach($relatedproducts as $relatedproduct)
                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
                                                        <img src="/storage/product/{{$relatedproduct->image1}}" alt="" class="product-img w3-round w3-margin"></img>
                                                        <br />
                                                        <br />
                                                        <a href="/products/{{$relatedproduct->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$relatedproduct->name}}</i>
                                                            <br /><i style="">{{$relatedproduct->description}}</i>
                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge">&#8358;{{$relatedproduct->price}}</div></b></a>
                                                </div>
                                            <br />
                                    @endforeach
                                @endif
                                




					</div>
			</div>
			
			
			
			


    @endsection