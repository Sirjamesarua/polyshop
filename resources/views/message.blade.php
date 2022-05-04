@extends('layouts.app')
    @section('content')

    @php
    	use App\Http\Controllers\Controller;
    	use App\Http\Controllers\ReviewsController;

    @endphp

    <style type="text/css">
 
section header{
	padding:30px 20px;
}
section input{
	width:100%;
	height:50px;
	line-height:50px;
	padding:0 50px 0 20px;
	background-color:#5e616a;
	border:none;
	border-radius:3px;
	color:#fff;
	background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_search.png);
	background-repeat:no-repeat;
	background-position:170px;
	background-size:40px;
}
section input::placeholder{
	color:#fff;
}
section ul{
	list-style-type:none;
}
section li:hover{
	background-color:#5e616a;
}
section li img{
	border-radius:50%;
}
section li div{
	display:inline-block;
	vertical-align:top;
}
section li h2{
	font-size:14px;
	color:#fff;
	font-weight:normal;
}
section li h3{
	font-size:12px;
	color:#7e818a;
	font-weight:normal;
}

.status{
	width:8px;
	height:8px;
	border-radius:50%;
	display:inline-block;
}
.green{
	background-color:#58b666;
}
.orange{
	background-color:#ff725d;
}
.blue{
	background-color:#6fbced;
	margin-right:0;
}

    </style>




			<!--BACK BTN-->
            <div class="w3-margin"><center><a href="{{ url()->previous() }}" class="btn btn-default" style="color:blue; font-size: 145%;"><span class="fa fa-arrow-left"></span><u>Back</u></a></center></div>

			<!--VIEWED PRODUCT-->
			<br />
			<!--MAIN-->
			<div class="">
			<div class="main-container w3-center border-center">
					<div class="main w3-center borders-center w3-round-xxxlarge">
					
								<br />
								<br />
										<b class="w3-left w3-text-grey" style="font-size: 200%;">MESSAGES</b>
					

						<div class="borders-center" style="width: 100%;">
							<form class="">
								<input type="text" placeholder="search for message" />
								<input type="submit" name="">
							</form>
							<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />
							<br />
							<br />

							<!--CHAT IMAGES-->
							<div class="container borders-center">

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 70px;width: 70px;" /></div>
									<div class="">
										<h3>Sir James <span class="status green"></span></h3>
										<i class="w3-text-white w3-red w3-circle">9</i><b><small class="w3-text-black" style="font-size: 110%;">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 70px;width: 70px;" /></div>
									<div class="">
										<h3>Sir James <span class="status orange"></span></h3>
										<i class="w3-text-white w3-red w3-circle">9</i><b><small class="w3-text-black" style="font-size: 110%;">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 70px;width: 70px;" /></div>
									<div class="">
										<h3>Sir James <span class="status orange"></span></h3>
										<i class="w3-text-white w3-red w3-circle">9</i><b><small class="w3-text-black" style="font-size: 110%;">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 70px;width: 70px;" /></div>
									<div class="">
										<h3>Sir James <span class="status orange"></span></h3>
										<i class="w3-text-white w3-red w3-circle">9</i><b><small class="w3-text-black" style="font-size: 110%;">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 85px;width: 85px;" /></div>
									<div class="">
										<h3>Sir James <span class="status orange"></span></h3>
										<i class="w3-text-whte w3-red w3-circle">9</i><b><small class="w3-text-black">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng" style="width: 80%;"></div><br />

								<div class="row">
									<div class=""><img src="/storage/profilepix/defaultpix.jpg" class="w3-circle" style="height: 85px;width: 85px;" /></div>
									<div class="">
										<h3>Sir James <span class="status orange"></span></h3>
										<i class="w3-text-whte w3-red w3-circle">9</i><b><small class="w3-text-black">i am very cool</small></b>
									</div>
								</div>
								<br />
								<div class="w3-border borderlng"></div><br />

							</div>



						</div>






					
								<!--<br />
								<br />
										<div id="container">
	<section>
		<header>
			<input type="text" placeholder="search">
		</header>
		<ul>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
			<li>
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_04.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status green"></span>
						online
					</h3>
				</div>
			</li>
			<li>
				<img src="/storage/profilepix/defaultpix.jpg" alt="">
				<div>
					<h2>Prénom Nom</h2>
					<h3>
						<span class="status orange"></span>
						offline
					</h3>
				</div>
			</li>
		</ul>
	</section>
	
</div>-->


					</div>
			</div>
			</div>
			
			
			
			


    @endsection