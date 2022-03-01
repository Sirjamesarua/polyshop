@extends('layouts.app')
    @section('content')

			
			@php
				foreach($othersprofile as $profile){
					$profile=$profile;
				};
			@endphp

			
			<!--VIEWED PROFILE-->
			<br />
			<br />
			<br />
			<!--PROFILE-->
			<div class="categories-container w3-center border-center">
					<div class="categories">
					
					
							<div class="profile-container">
										<img class="w3-circle w3-border-large" src="/storage/profilepix/{{$profile->profile_image}}" style="height:500px;"></img>
										<!--<div class="profie"><i class="fa fa-user-o" style="height:400px;"></i></div>-->
							</div>
									</div>
			</div>
			
			

			<!--<br />
			<div class="w3-border"></div>
			<br />-->
			<br />
			<br />
			<!--MAIN-->
			<div class="main-container w3-center border-center">
					<div class="main w3-center borders-center w3-round-xxxlarge w3-text-black">
					
								<br />
										<b class="w3-left w3-text-black"><i>@php echo strtoupper($profile->name); @endphp</i></b>
										
										<br />
										<i><b class="">Location: <span class="w3-text-blue">{{$profile->location}}</span></b></i>
										<br />
										<i><b class="">Last Seen: <span class="w3-text-blue">3hrs ago</span></b></i>
										<br />
										<i><b class="">Number: <span class="w3-text-blue">234{{$profile->phonenumber}}</span></b></i>
										
										<br />
										<a href="#"><b class="w3-text-red"><u>REPORT THIS PERSON</u></b></a>
								<br />
								
										<div class="w3-border borderlng"></div>
										<br />
								
								
								
								
                                @if(count($otherstopics)>=1)
                                    @foreach($otherstopics as $otherstopic)
                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
                                                        <img src="/storage/product/{{$otherstopic->image1}}" alt="" class="product-img w3-round w3-margin"></img>
                                                        <br />
                                                        <br />
                                                        <a href="/products/{{$otherstopic->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$otherstopic->name}}</i>
                                                            <br /><i style="">{{$otherstopic->description}}</i>
                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge">&#8358;{{$otherstopic->price}}</div></b></a>
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