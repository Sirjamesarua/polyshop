@extends('layouts.app')
    @section('content')

    @php
    	use App\Http\Controllers\Controller;
    	use App\Http\Controllers\ReviewsController;

    @endphp




    <div class="">
    			


					

					<!--<br />
					<div class="w3-border"></div>
					<br />-->
					<br />
					<br />
					<!--MAIN-->
					<div class="main-container w3-center border-center">
							<div class="main w3-center borders-center w3-round-xxxlarge w3-text-black" style="font-size: 130%;">

								<br />
								<br />
								<br />
					
									<div class="profile-container">
												<img class="w3-circle w3-border-large" src="/storage/profilepix/dyelshak.jpg" style="height:200px; width:200px" ></img>
												<!--<div class="profie"><i class="fa fa-user-o" style="height:400px;"></i></div>-->
									</div>
							
										<br />
												<b class="w3-left w3-text-black"><i>@php echo strtoupper("DYELSHAK"); @endphp</i></b>
												
												<br />
												<i><b class=""><span class="w3-text-blue">Web Developer</span></b></i>
												<br />
												<i><b class=""><span class="w3-text-blue">Graphic Designer</span></b></i>
												<br />
												<i><b class="">Email: <span class="w3-text-blue">dev.sirjames@gmail.com</span></b></i>
												<br />
												<i><b class="">Number: <span class="w3-text-blue">2348140480701</span></b></i>
												<br />
												
												<div class="w3-border borderlng"></div>
												<br />
										
												<a href="#"><b class="w3-text-red"><u>MODERATOR</u></b></a>
										<br />
									
							</div>
					</div>
			



    		</div>
	
    @endsection