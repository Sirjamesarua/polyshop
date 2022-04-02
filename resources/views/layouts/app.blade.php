<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
    <title>{{config('app.name','Josmarket')}}</title>
    <script src="./js/script1.js"></script>
      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.css" ></link>
    <link rel="stylesheet" href="{{asset('w3.css')}}" />
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}" />
    <link rel="stylesheet" href="https://font.googleapis.com/css?family=Roboto"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    
    <style>
.w3-border-small{border:1px solid #ccc!important}
.w3-margin-large{margin:44px!important}
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
                height:200px;
                width:200px;
            }
            
            /*ADS*/
            .ads{
                width:90%;
                height:250px;
                background-color:white;
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
            
            .product-img{
                height:280px;
                width:320px;
                float:left;
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
            
            
    </style>
    
</head>
<body>
            <!--HEADER-->
            <div class="header-container">
                    <div class="header w3-center">
                    
                            <!--HEADER NAME-->
                            <div class="">
                                <a href="/" style="color:white;"><b style="font-size:500%">JOSMARKET</b></a>
                            </div>
                            <!--MENU-->
                            <div class="menu-container">
                            
                                    <div class="w3-border"></div>
                                    <div class="">
                                            <!--<i class="fa fa-bars fa-3x w3-col" style="width:10%;"></i>-->
                                            <form class="w3-row w3-padding w3-center">
                                                    <!--<div class="w3-col" style="width:5%;"><a href="/home" class="w3-text-white"><i class="fa fa-user fa-2x w3-text-white"></i></a></div>-->

                                                    <div class="w3-col" style="width:10%;"><i class="fa fa-bars fa-2x" id="menubtn" href="javascript:void(0);" onclick="menubtn()"></i></div>

                                                    <div class="w3-col" style="width:70%;"><input type="text" name="" placeholder="search products"></input>
                                                    <input type="submit" value="search"></input></div>

                                                    <div class="w3-col" style="width:7%;"><a href="/myfavourite" class="w3-text-white"><i class="fa fa-cart-plus fa-2x"></i></a></div>

                                                    <div class="w3-col" style="width:9%;"><a href="/products/create"><i class="fa fa-plus fa-2x w3-text-white"></i></a></div>
                                            </form>
                                            <!--<b class="w3-xxxlarge"><i>Categories  <span class="fa fa-angle-down fa-1x"></span></i></b>
                                            <i class="fa fa-cart-plus fa-3x w3-col" style="width:10%;"></i>-->
                                    </div>
                                     
                                    <div class="w3-border"></div>
                                    <!--MENU LIST-->
                                    <div class="menu w3-text-blue" id="menulist">
                                            <b class=""><i><a href="/home" class="w3-text-blue">Profile</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                            
                                            <b class=""><i><a href="/tech/menu" class="w3-text-blue">Tech</a></i></b>
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
                                            
                                            <b class=""><i><a href="#" class="w3-text-blue">About</a></i></b>
                                            <br />
                                            <div class="w3-border"></div>
                                    </div>
                                    
                            </div>
                            
                    </div>
            </div>
            @yield('content')
           
            
            <!--FOOTER-->
            <div class="footer-container w3-center">
                    <div class="footer" style="font-size: 180%;"><b>&copy polyshop</b></div>
            </div>




        <script>
                    var x=document.getElementById("menulist");
                    
                        function menubtn(){
                            if(x.style.display=="none"){
                                        x.style.display="block";
                                }else{
                                    x.style.display="none";
                                }
                        }
        </script>


</body>
</html>