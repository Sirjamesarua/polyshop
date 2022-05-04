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
					
					
								<br />
								<br />
										<b class="w3-left w3-text-black w3-xlarge">ABOUT @php echo strtoupper(config('app.name','PolyStore')); @endphp</b>
					<!--ABOUT-->
					<div class="w3-padding-xlarge" style="font-size: 150%;">
						<b class=""><i>
							Polystore is an ecomerce platform that helps both students, staffs, and other businessmen to sell and buy goods and service in an ease way.
						</i></b>
					</div>


					</div>
			</div>
			
			
			
			


    @endsection