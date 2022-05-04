<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
    <title>{{config('app.name','PolyStore')}}</title>
    <script src="./js/script1.js"></script>
    <!--AJAX CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css" ></link>
    <link rel="stylesheet" href="{{asset('w3.css')}}" />
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}" />
    <link rel="stylesheet" href="https://font.googleapis.com/css?family=Roboto"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link><meta charset="utf-8">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    
    <style>

@media (orientation:landscape){
    .contactseller{
        width: 60%;
    }
    }
}

.chatbox {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    box-shadow: 0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28);
}
.chat-window {
    flex: auto;
    max-height: calc(100% - 60px);
    overflow: auto;
}
.chat-input {
    flex: 0 0 auto;
    height: 71px;
    background: #40434e;
    border-top: 1px solid #2671ff;
    box-shadow: 0 0 4px rgba(0,0,0,.14),0 4px 8px rgba(0,0,0,.28);
}
.chat-input input {
    height: 70px;
    line-height: 60px;
    outline: 0 none;
    border: none;
    width: calc(100% - 60px);
    color: #48006F;
    text-indent: 10px;
    font-size: 12pt;
    padding: 0;
}
.chat-input button {
    float: right;
    outline: 0 none;
    border: none;
    background: rgba(255,255,255,.25);
    height: 40px;
    width: 40px;
    border-radius: 50%;
    padding: 2px 0 0 0;
    margin: 10px;
    transition: all 0.15s ease-in-out;
}
.chat-input input[good] + button {
    box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);
    background: #2671ff;
}
.chat-input input[good] + button:hover {
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.chat-input input[good] + button path {
    fill: white;
}
.msg-container {
    position: relative;
    display: inline-block;
    width: 100%;
    margin: 0 0 10px 0;
    padding: 0;
}
.msg-box {
    display: flex;
    background: #dee2e6;
    padding: 10px 10px 0 10px;
    border-radius: 0 6px 6px 0;
    max-width: 80%;
    width: auto;
    float: left;
    box-shadow: 0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);
}
.user-img {
    display: inline-block;
    border-radius: 50%;
    height: 40px;
    width: 40px;
    background: #2671ff;
    margin: 0 10px 10px 0;
}
.flr {
    flex: 1 0 auto;
    display: flex;
    flex-direction: column;
    width: calc(100% - 50px);
}
.messages {
    flex: 1 0 auto;
}
.msg {
    display: inline-block;
    font-size: 11pt;
    line-height: 13pt;
    color: #48006F;
    margin: 0 0 4px 0;
}
.msg:first-of-type {
    margin-top: 8px;
}
.timestamp {
    color: rgba(0,0,0,.38);
    font-size: 8pt;
    margin-bottom: 10px;
}
.username {
    margin-right: 3px;
}
.posttime {
    margin-left: 3px;
}
.msg-self .msg-box {
    border-radius: 6px 0 0 6px;
    background: #2671ff;
    float: right;
}
.msg-self .user-img {
    margin: 0 0 10px 10px;
}
.msg-self .msg {
    text-align: right;
}
.msg-self .timestamp {
    text-align: right;
}



.w3-border-small{border:1px solid #ccc!important}
.w3-margin-large{margin:44px!important}
.w3-margin-small{margin:6px!important}
.w3-padding-xxlarge{padding:24px 40px!important}
.w3-padding-xlarge{padding:24px 36px!important}
.w3-transparent-black{color:#fff!important;background-color:rgba(0,0,0,0.7);!important}
.w3-border-top-round{border-top:4px solid;border-radius:80px #ccc!important}
.w3-round-jumbo{border-radius:80px}
.w3-topbar-small{border-top:2px solid #ccc!important}
.w3-bottombar-small{border-bottom:2px solid #ccc!important}
.w3-topbar-medium{border-top:4px solid #ccc!important}
.w3-bottombar-medium{border-bottom:4px solid #ccc!important}
.w3-round-xxxlarge{border-radius:60px}
.w3-border-xlarge{border:8px solid #ccc!important}
.w3-border-large{border:4px solid #ccc!important}
.w3-border-top-large{border-top:4px solid #ccc!important}
.w3-border-top-xlarge{border-top:6px solid #ccc!important}
.w3-xjumbo{font-size:80px!important}
            /*MY STYLE*/
            .border-center{
                display:flex;
                justify-content:center;
            }

            a{
                color:#48006F;
            }
            
            .borders-center{
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            
            .borderlng{
                width:100%;
            }
            
            .filterform{
                background-color:#48006F;
                width:100%;
            }
            
            .filterselect{
                background-color:#48006F;
                width:60%;
                color:white;
            }
            
            .newproductform{
                width:70%;
            }
            
            .choosefile{
                width:75%;
            }
            
            .viewedproductimg{
                width:80%;
                height:600px;
                background-color:blue;
            }
            
            .w3-round-jumbo{
                    border-radius:120px;
                    }
            
            body{
                background-color:#48006F;
                font-family:serif;
                color:white;
                box-sizing: border-box;
            }
    
                body{
                    font-size:70%;
                }

            @media (orientation:landscape){
                body{
                    font-size:150%;
                }

                .product-title ,.price-tag{
                    font-size:150%;
                }
            }
            /*HEADER*/
            .header-container{
                background-color:#48006F;
            }
            
            .menu{
                display:none;
            }
            
            
            /*CATEGORIES*/
            .categories{
                width:95%;
                color:#48006F;
            }
            
            .cat{
                background-color:#DFDFDF;
                height:150px;
                width:200px;
                margin:6px;
            }

            @media (orientation:landscape){
                .cat{
                    height:200px;
                    width:200px;
                    margin:16px;
                }
            }

            
            /*ADS*/
            .ads{
                width:90%;
                height:150px;
                background-color:white;
            }
            
            @media (orientation:landscape){
                .ads{
                    height:250px;
                }
            }

            /*MAIN*/
            .main{
                  color:#48006F;
                    background-color:white;
                  width:90%;
            }
    
            /*FORM"*/
            .submit-btn{
                background-color:#48006F;
                color:white;
                width:60%;
            }
            .product-list{
                background-color:#DFDFDF;
              color:#48006F;
                width:99%;
                /*height:300px;*/
            }

            /*.product-list:hover{
                background-color:#5e616a;
            }*/
            
            .product-img{
                height:280px;
                width:320px;
                float:left;
            }

            @media screen and (orientation:portrait){
                .product-img{
                    height:166px;
                    width:50%;
                }

            }
            
            .price-tag{
                display:flex;
                justify-content:flex-end;
            }

            .viewproductimg{
                width:180px;
                height:230px;
            }

            @media screen and (orientation:landscape){
            .viewproductimg-div{
                display:flex;
            }

                .viewproductimg{
                    width:180px;
                    height:230px;
                }
            }
            
            #reportproductform, #reportsellerform{
                background-color: #DFDFDF;
                display: none;
            }
            
    </style>
    
</head>
<body>
            <!--HEADER-->
            <div class="header-container">
                    <div class="header w3-center">
                    
                            <!--HEADER NAME-->
                            <div class="">
                                <a href="{{url('/')}}" style="color:white; text-decoration: none;"><b style="font-size:500%;">@php echo strtoupper(config('app.name')) @endphp</b></a>
                            </div>
                            <!--MENU-->
                            <div class="menu-container">
                            
                                    <div class="w3-border"></div>
                                    <div class="">
                                            <!--<i class="fa fa-bars fa-3x w3-col" style="width:10%;"></i>-->
                                            <form class="w3-row w3-padding w3-center" method="GET" action="{{route('search')}}" enctype="multipart/Form-data">
                                                    {{method_Field('POST')}}
                                                    @csrf
                                                    <!--<div class="w3-col" style="width:5%;"><a href="/home" class="w3-text-white"><i class="fa fa-user fa-2x w3-text-white"></i></a></div>-->

                                                    <div class="w3-col" style="width:10%;"><i class="fa fa-bars fa-2x" id="menubtn" href="javascript:void(0);"></i></div>

                                                    <div class="w3-col" style="width:70%;"><input type="text" name="search" placeholder="search products"></input>
                                                    <input type="submit" value="search"></input></div>

                                                    <div class="w3-col" style="width:7%;"><a href="/myfavourite" class="w3-text-white"><i class="fa fa-cart-plus fa-2x"></i></a></div>

                                                    <div class="w3-col" style="width:9%;"><a href="/products/create"><i class="fa fa-plus fa-2x w3-text-white"></i></a></div>
                                            </form>
                                            <!--<b class="w3-xxxlarge"><i>Categories  <span class="fa fa-angle-down fa-1x"></span></i></b>
                                            <i class="fa fa-cart-plus fa-3x w3-col" style="width:10%;"></i>-->
                                    </div>
                                     
                                    <div class="w3-border"></div>
                                    <!--MENU LIST-->
                                    <div class="menu w3-text-blue" id="menulist" style="font-size: 135%;">
                                            <b class=""><i><a href="/" class="w3-text-blue">Home</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            <b class=""><i><a href="/home" class="w3-text-blue">Profile</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/phone/menu" class="w3-text-blue">Phone</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/fashion/menu" class="w3-text-blue">Fashion</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/education/menu" class="w3-text-blue">Education</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/electronic/menu" class="w3-text-blue">Electronics</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/service/menu" class="w3-text-blue">Service</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>

                                            <b class=""><i><a href="/others/menu" class="w3-text-blue">Others</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="#" class="w3-text-blue">About</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                    </div>
                                    
                            </div>
                            
                    </div>
            </div>

                @yield('content')
            
            <!--FOOTER-->
            <br />
            <div class="footer-container w3-center">
                    <div class="footer" style="font-size: 180%;"><b>&copy polystore</b></div>
            </div>




        <script>
                var token='{{csrf_token()}}';
                $(document).ready(function(){

                    var menu=document.getElementById("menulist");
                    
                        $('#menubtn').click(function(){
                            if(menu.style.display=="none"){
                                        $('#menulist').slideDown("slow");
                                }else{
                                        $('#menulist').hide();
                                }

                        });

                    //REPORT PRODUCT
                    /*var x=document.getElementById("reportproductform");
                    
                        $('#reportproduct').click(function(){
                            if(x.style.display=="none"){
                                        $('#reportproductform').slideDown("slow");
                                }else{
                                        $('#reportproductform').hide();
                                }

                        });


                        $("#reportproductformtag").submit(function(e){
                            e.preventDefault();

                            var content = $("textarea#report").val();
                            var product_id = $("input#reportid").val();

                            if(content == ""){
                                $("#emptyreport").html("please enter complain");
                                return false;
                            }else{
                                $("#emptyreport").html("");
                            };



                            $.ajaxSetup({
                                headers:{
                                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                                }
                            });


                            $.ajax({
                                type:"POST",
                                url:"/reportproduct",
                                data:{
                                    '_token': token,
                                    report:content,
                                    product_id:product_id,
                                },
                                //data: content,
                                dataType:"json",
                                success:function(response){
                                    if(response.status==400){
                                            $('#emptyreport').html("");
                                            $('#emptyreport').text("not successfull");
                                    }else{
                                            //alert("Product reported successfully");
                                            alert(response.message);

                                            $('#reportproductform').hide();
                                            $('#reportproductform').find('textarea#report').val("");
                                    }
                                }
                            });
                        });

                       */





                    //REPORT PRODUCT

                    //getting the  a id been pressed
                    $("#reportproduct,#reportperson").click(function(){
                            //var reportid = (this).attr("id");

                            var x=document.getElementById("reportproductform");
                    
                            if(x.style.display=="none"){
                                        $('#reportproductform').slideDown("slow");
                            }else{
                                    $('#reportproductform').hide();
                            }

                            //var url = $(this).attr('id');
                            //alert(url);

                    });


                        $("#reportproductformtag").submit(function(e){
                            e.preventDefault();

                            var url ="/"+$(".reportclass").attr("id");


                            //alert(url);

                            var content = $("textarea#report").val();
                            var product_id = $("input#reportid").val();

                            if(content == ""){
                                $("#emptyreport").html("please enter complain");
                                return false;
                            }else{
                                $("#emptyreport").html("");
                            };



                            $.ajaxSetup({
                                headers:{
                                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                                }
                            });


                            $.ajax({
                                type:"POST",
                                url:url,
                                data:{
                                    '_token': token,
                                    report:content,
                                    product_id:product_id,
                                    seller_id:product_id,
                                },
                                //data: content,
                                dataType:"json",
                                success:function(response){
                                    if(response.status==400){
                                            $('#emptyreport').html("");
                                            $('#emptyreport').text("not successfull");
                                    }else{
                                            //alert("Product reported successfully");
                                            alert(response.message);

                                            $('#reportproductform').hide();
                                            $('#reportproductform').find('textarea#report').val("");
                                    }
                                }
                            });
                        });


 //MESSAGE CHAT
/*
$('.chat-input input').keyup(function(e) {
    if ($(this).val() == '')
        $(this).removeAttr('good');
    else
        $(this).attr('good', '');
});*/





                        $("#messageform").submit(function(e){
                            e.preventDefault();


                            if($('#message').val() !=''){

                                    //alert(url);

                                    var message = $("input#message").val();
                                    var sender_id = $("input#sender_id").val();
                                    var receiver_id = $("input#receiver_id").val();

                                    //alert(receiver_id);


                                    /*if(content == ""){
                                        $("#emptyreport").html("please enter complain");
                                        return false;
                                    }else{
                                        $("#emptyreport").html("");
                                    };*/



                                    $.ajaxSetup({
                                        headers:{
                                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                                        }
                                    });


                                    $.ajax({
                                        type:"POST",
                                        url:"/savemessage",
                                        data:{
                                            '_token': token,
                                            message:message,
                                            sender_id:sender_id,
                                            receiver_id:receiver_id,
                                        },
                                        //data: content,
                                        dataType:"json",
                                        success:function(response){
                                            if(response.status==400){
                                                    $('#messageform').find('#message').val(message);
                                            }else{
                                                    //alert("Product reported successfully");
                                                    //alert(response.message);

                                                    //$('#reportproductform').hide();
                                                    $('#messageform').find('#message').val("");
                                            }
                                        }
                                    });
                            };
                        });











                });






        </script>


</body>
</html>