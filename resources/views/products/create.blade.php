@extends('layouts.app')
    @section('content')

    @php
    	use App\Http\Controllers\Controller;
    	use App\Http\Controllers\ReviewsController;
    	use App\Http\Controllers\ProductsController;
    	use App\Http\Controllers\HomeController;


    @endphp

			<!--ADD PRODUCT-->
			<br />
			<br />

			<!--MAIN-->
								<div class="w3-center"><b class="w3-text-grey" style="font-size: 200%;">ADD PRODUCT</b></div>
								<br />

			<div class="main-container w3-center border-center">
					<div class="main w3-center w3-round-xxxlarge borders-center" style="font-size: 150%;">
					
								<br />
								<br />
								<!--
								<form class="" method="POST" action="{{action('App\Http\Controllers\ProductsController@store')}}" enctype="multipart/Form-data">-->
								<form class="" method="POST" action="{{route('products.store')}}" enctype="multipart/Form-data">
									{{method_Field('POST')}}
									@csrf
										<b class=""><i>Name :</i><i><br /><sub class="w3-text-grey">short description of the product</sub></i></b>
										<br />
										<input type="text" name="name" placeholder="Enter name of product" style="width:65%;" required></input>
										<br />
										<br />
										<b class=""><i>Category :</i></b>
										<br />
										<select name="category" class="newproductform" style="width:65%;" required>
												<option value="">Select category</option>
												<option value="phone">Phone</option>
												<option value="fashion">Fashion</option>
												<option value="education">Education</option>
												<option value="electronic">Electronic</option>
												<option value="service">Service</option>
												<option value="others">Others</option>
										</select>
										<br />
										<br />
										<b class=""><i>Price :</i></b>
										<br />
										<input type="number" name="price" placeholder="Enter amount" style="width:65%;" required></input>
										<br />
										<br />
										<b class=""><i>Description :</i></b>
										<br />
										<textarea name="description" placeholder="Describe your product" class="newproductform" style="width:65%;height:250px;" required></textarea>
										<br />
										<b class=""><i>Img :</i></b>
										<br />
										<div class="w3-center w3-padding-large">
													<input type="file" class="choosefile" name="image1" required></input>
													<input type="file" class="choosefile" name="image2" required></input>
													<input type="file" class="choosefile" name="image3" required></input>
										</div>
										<br />
										<br />
										
										<input type="submit" value="ADD" class="submit-btn w3-round-xxlarge"></input>
										
										<br />
								</form>
								
								
								<br />
					</div>
			</div>
			
@endsection