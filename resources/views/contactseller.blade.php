@extends('layouts.app')
    @section('content')

    @php
        use App\Http\Controllers\Controller;
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\ReviewsController;
        use App\Http\Controllers\MessageNotificationController;

    @endphp


			<!--BACK BTN-->
            <div class="w3-margin"><center><a href="{{ url()->previous() }}" class="btn btn-default" style="color:blue; font-size: 145%;"><span class="fa fa-arrow-left"></span><u>Back</u></a></center></div>

			<!--VIEWED PRODUCT-->
			<br />
			<!--MAIN-->
			<div class="borders-center">
			<div class="main-container w3-center border-center contactseller">
					<div class="main w3-center borders-center w3-round-xxxlarge">
					
					
					



			<div class="" style="color: rgba(96, 125, 139,1.0);">
				
				<img class="w3-circle w3-margin" style="width: 100px; height: 100px;" src="/storage/profilepix/defaultpix.jpg" />
				
				<br />
				<h6 class="" style="margin: 0px; margin-left: 10px; font-size: 30px; color: #48006F;"> Yusuf Bulgurcu</h6>
					
			</div>

			<div class="w3-border borderlng w3-margin"></div>



			<section class="chatbox">
		<section class="chat-window w3-padding">

			<article class="msg-container msg-remote" id="msg-0">
				<div class="msg-box">
					<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
					<div class="flr">
						<div class="messages">
							<p class="msg" id="msg-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius, neque non tristique tincidunt, mauris nunc efficitur erat, elementum semper justo odio id nisi.
							</p>
						</div>
						<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">3 minutes ago</span></span>
					</div>
				</div>
			</article>

			<article class="msg-container msg-self" id="msg-0">
				<div class="msg-box">
					<div class="flr">
						<div class="messages">
							<p class="msg" id="msg-1">
								Lorem ipsum dolor sit amet
							</p>
							<p class="msg" id="msg-2">
								Praesent varius
							</p>
						</div>
						<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">2 minutes ago</span></span>
					</div>
					<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
				</div>
			</article>
			<article class="msg-container msg-remote" id="msg-0">
				<div class="msg-box">
					<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
					<div class="flr">
						<div class="messages">
							<p class="msg" id="msg-0">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
						</div>
						<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">1 minute ago</span></span>
					</div>
				</div>
			</article>
			<article class="msg-container msg-remote" id="msg-0">
				<div class="msg-box">
					<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
					<div class="flr">
						<div class="messages">
							<p class="msg" id="msg-0">
								Lorem ipsum dolor sit amet.
							</p>
						</div>
						<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">Now</span></span>
					</div>
				</div>
			</article>

	        @if(count($chatlists)>=1)
	            @foreach($chatlists as $chatlist)
	            		@php
	            			$messageuser_id= auth()->user()->id;
	            			if($chatlist->sender_id == $messageuser_id){
	            		@endphp
								<article class="msg-container msg-self" id="msg-0">
									<div class="msg-box">
										<div class="flr">
											<div class="messages">
												<p class="msg" id="msg-1">
													{{$chatlist->content}}
												</p>
											</div>
											<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">Now</span></span>
										</div>
										<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
									</div>
								</article>
						@php
							}else{
						@endphp
								<article class="msg-container msg-remote" id="msg-0">
									<div class="msg-box">
										<img class="user-img" id="user-0" src="/storage/profilepix/defaultpix.jpg" />
										<div class="flr">
											<div class="messages">
												<p class="msg" id="msg-0">
													{{$chatlist->content}}
												</p>
											</div>
											<span class="timestamp"><span class="username">Name</span>&bull;<span class="posttime">Now</span></span>
										</div>
									</div>
								</article>

						@php
							}
						@endphp
					    
		        @endforeach
		    @else
		    	<div class="w3-large w3-text-black w3-margin-large"><b>Chat With </b></div>
		    @endif

		</section>
		<form class="chat-input w3-margin" method="POST" action="javascript:void(0);" enctype="multipart/Form-data" id="messageform">
					{{method_Field('POST')}}
					@csrf
			<input type="text" id="message" autocomplete="on" placeholder="Type a message" />

			<input type="hidden" id="sender_id" value="{{ Auth::user()->id }}" />
			<input type="hidden" id="receiver_id" value="{{$receiver_id}}" />

			<button id="messagesubmit">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="rgba(0,0,0,.38)" d="M17,12L12,17V14H8V10H12V7L17,12M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L5,8.09V15.91L12,19.85L19,15.91V8.09L12,4.15Z" /></svg>
                </button>
		</form>
	</section>
			
<br />
<br />




					</div>
			</div>
			</div>

			
			
			


    @endsection