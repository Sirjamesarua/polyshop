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
								<div class="w3-center"><b class="w3-text-grey">EDIT PRODUCT</b></div>
			<div class="main-container w3-center border-center">
					<div class="main w3-center w3-round-xxxlarge borders-center">
					
								<br />
								<br />
								<!--
								<form class="" method="POST" action="{{action('App\Http\Controllers\ProductsController@store')}}" enctype="multipart/Form-data">-->
								<form class="" method="POST" action="/products/{{$product->id}}" enctype="multipart/Form-data">
									{{method_Field('PUT')}}
									@csrf
										<b class=""><i>Name :<sub class="w3-text-grey">short description of the product</sub></i></b>
										<br />
										<input type="text" name="name" class="@error('name') is-invalid @enderror" value="{{$product->name}}" style="width:65%;" required></input>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

										<br />
										<br />
										<b class=""><i>Category :</i></b>
										<br />
										<select name="category" class="newproductform" style="width:65%;" required>
												<option value="">Select category</option>
												<option value="tech">Tech</option>
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
										<input type="number" name="price" value="{{$product->price}}"class="@error('price') is-invalid @enderror" style="width:65%;" required></input>
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

										<br />
										<br />
										<b class=""><i>Description :</i></b>
										<br />
										<input type="text" name="description" class="@error('description') is-invalid @enderror" value="{{$product->description}}" class="newproductform" style="width:65%;height:250px;" required></input>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

										<br />
										<b class=""><i>Img :</i></b>
										<br />
										<div class="w3-center w3-padding-large">
													<input type="file" class="choosefile" name="image1"class="@error('image1') is-invalid @enderror" required></input>
			                                        @error('image1')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror

													<input type="file" class="choosefile" name="image2" class="@error('image2') is-invalid @enderror" required></input>
			                                        @error('image2')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror

													<input type="file" class="choosefile" name="image3" class="@error('image3') is-invalid @enderror" required></input>
			                                        @error('image3')
			                                            <span class="invalid-feedback" role="alert">
			                                                <strong>{{ $message }}</strong>
			                                            </span>
			                                        @enderror

										</div>
										<br />
										<br />
										
										<input type="submit" value="UPDATE" class="submit-btn w3-round-xxlarge"></input>
										
										<br />
								</form>
								
								
								<br />
					</div>
			</div>
			

    @endsection