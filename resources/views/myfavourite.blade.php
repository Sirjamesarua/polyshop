@extends('layouts.app')
    @section('content')

    @php
    	use App\Http\Controllers\Controller;
    	use App\Http\Controllers\ReviewsController;

    @endphp



			<!--FAVOURITE/CART-->
			<br />
			<br />		
			<!--MAIN-->
			<div class="main-container w3-center border-center">
					<div class="main w3-center borders-center w3-round-xxxlarge">
					
								<br />
										<b class="w3-left w3-text-black" style="font-size: 180%;">FAVOURITE</b>
										
										
											<br />
								

                                
                                @if(count($myfavourites)>=1)
                                    @foreach($myfavourites as $myfavourite)
                                    	@php
                                    		$products=DB::table('product')->where('id',$myfavourite->product_id)->get();
                                    	@endphp

		                                    @foreach($products as $product)
		                                            <div class="product-list w3-round-xxlarge w3-padding w3-display-container">
		                                                        <img src="/storage/product/{{$product->image1}}" alt="" class="product-img w3-round w3-margin"></img>
		                                                        <br />
		                                                        <br />
		                                                        <a href="/products/{{$product->id}}" style="text-decoration: none;"><b class=""><i class="product-title">{{$product->name}}</i>
		                                                            <br /><i style="">{{$product->description}}</i>
		                                                            <div class="w3-text-red price-tag w3-display-bottomright w3-padding-xxlarge"><b style="background-color: #dfdfdf;" class="w3-round-xlarge">&#8358;{{$product->price}}</b></div></b></a>

		                                                            <div class="">
		                                                                <form action="/products/{{$myfavourite->id}}/removefavourite" class="" method="POST">
		                                                                    {{method_Field('DELETE')}}
		                                                                    @csrf

		                                                                    <input type="hidden" name="_method" value="DELETE"></input>
		                                                                    <input type="submit" value="(Remove)" style="border:none; background-color:#DFDFDF;" class="w3-display-bottom w3-text-blue" ></input>
		                                                                </form>
		                                                            </div>
		                                                </div>
		                                            <br />
			                                    @endforeach
                                
                                    @endforeach
                                @else
                                	<div class="w3-large w3-text-black w3-margin-large"><b>MY FAVOURITES IS EMPTY</b></div>
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
			
			