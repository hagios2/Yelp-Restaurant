<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">

  <title>Restaurant</title>

  <link rel="shortcut icon" href="https://s3-media0.fl.yelpcdn.com/assets/public/favicon.yelp_styleguide.yji-118ff475a341620f50dfbaddb83efb25.ico" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>shintaul Restaurant</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Aquamarine template for unique events.">
  <meta name="keywords" content="Pingendo conference event aquamarine free template bootstrap 4">
  <!-- CSS dependencies -->
{{--   <link rel="stylesheet" href="/app/aquamarine.css"> --}}
  <link href="{{ asset('css/aquamarine.css') }}" rel="stylesheet">
  <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
{{--   <link rel="stylesheet" href="rating.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
{{--   <script src="js/navbar-ontop.js"></script> --}}
  <script src="{{ asset('js/navbar-ontop.js') }}"></script>
 {{--  <script src="{{ asset('js/rating.js') }}"></script>
  <script src="{{ asset('js/smooth-scroll.js') }}"></script>
  <script src="{{ asset('js/animate.js') }}"></script> --}}
  <script src="{{ asset('js/search.js') }}"></script>

 {{--  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}

  <script src="{{ asset('js/app.js') }}" ></script>

  <style>
    /* css for autocomplete */
    .ui-autocomplete {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}

.ui-autocomplete > li > div {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}

.ui-state-hover,
.ui-state-active,
.ui-state-focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
  cursor: pointer;
}

.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
   
  </style>
  <!-- Script: Animated entrance -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 {{--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark" style="transition: all 0.25s;">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#speakers">Restaurants</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#schedule">Orders</a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 text-white btn-outline-light" href="#register">Register now</a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url('https://s3-media1.fl.yelpcdn.com/bphoto/4ydj9Jo-3tBfPESPz-J5bg/o.jpg'); transition: all 0.25s;">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12 text-white mt-5">

        <div class="row justify-content-center">
          <img src="https://s3-media0.fl.yelpcdn.com/assets/public/favicon.yelp_styleguide.yji-118ff475a341620f50dfbaddb83efb25.ico" alt="" srcset=""> <h4 class="title">Yelp Restaurant Services</h4> 

      </div> <br>

      <div class="justify-content-center">

        <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10">
          <span style="font-size:1rem; margin-right:2rem;">
              <i style="color:#f2552c;" class="fas fa-search" aria-hidden="true"></i>  Find Restaurant
          </span> 
          <span style="font-size:1rem; margin-right:2rem;">
              <i style="color:#f2552c;" class="fas fa-utensils"></i> Order Wish Meal
          </span>
          <span style="font-size:1rem; margin-right:2rem;">
              <i style="color:#00ccff; font-size:1rem;" class="fas fa-shipping-fast" aria-hidden="true"></i>  Select Delivery
          </span>
          <span style="font-size:1rem; margin-right:2rem;">
              <i style="color:#fab005; font-size:1rem;" class="fas fa-gifts"></i>  Enjoy your Day
          </span>

      </div>
      </div>

       <br><br>

          <div class="bg-white p-5 rounded shadow">

            <form autocomplete="off" action="">

                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i class="fas fa-search"></i></button>
                    </div>
                    <input type="search" id="search" placeholder="Restaurant, meals, pizza" aria-describedby="button-addon2" class=" form-control border-0 bg-light">
                    </div>
                </div>
            
             </form>
        <!-- End -->


        <div style="font-size:1rem;" class="d-flex justify-content-center"> <span><a href="#"><i id="rest-link" class="fas fa-utensils"></i> Restaurant<a> &emsp;| &emsp;<a id="breakfast" href="#"><i class="fas fa-coffee"></i> Breakfast and brunch</a> &emsp; | &emsp; <a id="loc_delivery" href="#"><i class="fas fa-shipping-fast"></i> Available delivery</a></span></div>


    </div>
          <h1 class="display-4 d-block d-md-none">Conference Pingendo</h1>
          <p class="">{{ now() }} </p>
          <a href="#register" class="btn btn-lg mt-4 btn-outline-light">Register now</a><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <div class="py-5 section-parallax" style="background-image: url('http://d33rxv6e3thba6.cloudfront.net/2017/1/58b4490d67e738065f3fb3c8/24326-1a1h42w.jpg'); transition: all 0.25s;">
  </div>
  <!-- Speakers -->
  <div class="py-3 text-center" style="transition: all 0.25s;">

    
   {{--  <div class="container">
      <div class="row">
        
      </div>
      <div class="row justify-content-center">
      </div>
    </div> --}}
  </div>
  <div class="py-5 bg-light col-md-12" id="speakers" style="transition: all 0.25s; display:none;" >

    {{-- insert pages here dynamically  --}}


  </div>
  <!-- Schedule -->
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>what are people saying?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="assets/conference/people_6.jpg" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#1</b> </p>
              <p class="mb-0">A wonderful serenity has taken possession of my entire soul.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media0.fl.yelpcdn.com/photo/dHdLAxZzQWb8zZ4svfm_7g/60s.jpg" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#2</b> </p>
              <p class="mb-0">I am alone, and feel the charm of existence in this spot.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#3</b> </p>
              <p class="mb-0">I should be incapable of drawing a single stroke.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media0.fl.yelpcdn.com/photo/eh8sf-HdpcjE8r-xCMOlsQ/ls.jpg" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#1</b> </p>
              <p class="mb-0">A wonderful serenity has taken possession of my entire soul.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="assets/conference/people_6.jpg" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#5</b> </p>
              <p class="mb-0">I lie close to the earth, a thousand unknown plants.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="assets/conference/people_6.jpg" width="300"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#6</b> </p>
              <p class="mb-0">When I hear the buzz of the little world among the stalks.</p>
            </div>
            <div class="col-md-12" style="">
              <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span> &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
              <hr style="border:3px solid #f1f1f1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Sponsor logos -->
  <div class="py-5 section bg-faded bg-light" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-4">Sponsors</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_1.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_4.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_3.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_2.png"> </div>
      </div>
    </div>
  </div>
  <div class="py-5">
  </div>
  <!-- Call to action -->
  <div class="py-5 section-aquamarine" id="register" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-md-left text-center">
        </div>
      </div>
    </div>
  </div>

  @include('chatbot')
  <!-- Footer -->
  <footer class="text-md-left text-center p-4 bg-dark text-light" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Shuntaul Restaurant</h3>
          <p class="text-muted">March 4, 2020</p>
          <p class="my-3">
            <a href="https://goo.gl/maps/ayn28vkB5F92" target="blank" class="text-muted">Empire State building 350 5th Ave, <br>New York, NY 10118</a>
          </p>
        </div>
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Contact us</h3>
          <form>
            <fieldset class="form-group my-3">
              <input type="email" class="form-control" id="Input Email" placeholder="Email"> </fieldset>
            <fieldset class="form-group my-3">
              <input type="message" class="form-control" id="Input Message" placeholder="Message"> </fieldset>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-1"> </div>
        <div class="my-3 col-lg-3">
          <h3>Follow</h3>
          <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-square text-muted fa-3x m-2"></i></a>
          <a href="https://www.instagram.com" target="blank"><i class="fa fa-3x fa-instagram text-muted m-2"></i></a>
          <a href="https://twitter.com" target="blank"><i class="fa fa-3x fa-twitter m-2 text-muted"></i></a>
          <a href="https://plus.google.com" target="blank"><i class="fa fa-3x fa-google-plus-official text-muted m-2"></i></a>
          <a href="https://pinterest.com" target="blank"><i class="fa fa-3x text-muted fa-pinterest-p m-2"></i></a>
          <a href="https://www.youtube.com" target="blank"><i class="fa fa-3x text-muted fa-youtube-play m-2"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted">© Copyright 2020 Shuntaul - All rights reserved. </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" style="transition: all 0.25s;"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" style="transition: all 0.25s;"></script>
{{--   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" style="transition: all 0.25s;"></script> --}}
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js" style="transition: all 0.25s;"></script>
 {{--  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body> --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

$(document).ready(function(){

var businessId;

let requests = {
    
    main_url : 'https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/',

    headers: {

        Authorization:'Bearer 0-EMxQYxzSV7h17Si28ZJ1x16_ss86MGSaP6gz3T44mfac2SW0Er4aWAKQt2v0htbS5TRlTN9_B07FMMyb8VeK7BjvJV0DNTjOHIgX-yy32ERf5ZK75oKN9kTghbXnYx'
    },

};


$('#search').autocomplete({
                
    source: function(request, response){

        var searchItem = jQuery('#search').val();

        let data = {

            text: searchItem, 
            latitude: '37.786882',
            longitude: '-122.399972'
        }

        $.ajax({

            url: requests.main_url + 'autocomplete',
            headers: requests.headers,
            dataType: 'json',
            data: data,

            success: function(data){ 

                console.log(data);

                $('#search').removeClass('ui-autocomplete-loading');

                //var obj = JSON.parse(data);
            
                response( $.map(data, function(item, i) { 
                
                // your operation on data

                    return   $.map(item, function(res){

                        if(res.title)
                        {
                            return {

                                label : res.title,
                                value : res.title,
                            }
                        
                        } else if(res.name){

                            return {

                                label : res.name,
                                value : res.name,
                            }

                        } else if (res.text){

                            return {

                                label : res.text,
                                value : res.text,
                            }

                        }
                    });

                }));
            
            },
            
            error: function(data) {

                $('#search').removeClass('ui-autocomplete-loading');  
            
            }
        
        });

    }

});


$('#rest-link').click(function(e){

    e.preventDefault();

    getSearchItem('restaurant');
   

});

$('#breakfast').click(function(e){

    e.preventDefault();

    getSearchItem('breakfast and brunch');

});



$('#loc_delivery').click(function(e){

    e.preventDefault();

    getYourLocationDeliverySearch()

});


$('#button-addon2').click(function(e){

    e.preventDefault();

    let userInput = $('#search').val();

    if(userInput != '')
    {
        getSearchItem(userInput);
    }

});


$( "#search" ).on( "autocompleteselect", function( event, ui ) { 

    /* both label and value are the same  */

    /* call search */

    getSearchItem(ui.item.label)

} );


function getSearchItem(userInput)
{
    let data = {

        term: userInput,
        latitude: '37.786882',
        longitude: '-122.399972'
    };

    $.ajax({

        url: requests.main_url + 'businesses/search',
        headers: requests.headers,
        dataType: 'json',
        data: data

    }).done(function(data){

        $.each(data, function(i ,businesses){

          $.each(businesses, function(i ,restaurant){                    

              getBusiness(restaurant.id, i) 

            });

          });

        });
  }
/*  */


    function getBusiness(businessId)
        {

            let data = {

                latitude: '37.786882',
                longitude: '-122.399972'
                
            };

            $.ajax({

                url: requests.main_url + 'businesses/' + businessId,
                headers: requests.headers,
                dataType: 'json',
                data: data

            }).done(function(data){

                if(!jQuery.isEmptyObject(data))
                {
                    let carousel_num = 1;
                    let dyn_img_li = ``;
                    let dyn_img = ``;

                    let restaurant = {
                          
                        address : data.location.address1.replace(` `, `%`),

                        name : data.name.replace(` `, `%20`),

                        cords : data.coordinates.latitude +', '+ data.coordinates.longitude, 

                    };
                    let category = ``;

                    $.each(data.categories, (i, cat) => {

                            category += ` <li>`+cat.title+`</li>`

                    });
                    
                    $.each(data.photos, (i, pix) => {
                        
                        dyn_img += `<div class="carousel-item"><img style="max-height:400px;" class="d-block img-fluid w-100" src="`+pix+`">
                                  <div class="carousel-caption">
                                    <h5 class="m-0">Carousel</h5>
                                    <p>with controls</p>
                                  </div>
                                </div>`;
                
/* 
                        dyn_img_li += `<li data-target="#carouselExampleIndicators" data-slide-to="'+carousel_num+'"></li>`; */

                                carousel_num ++;
                    });

                    let hours = {

                      regular : ``,

                      open_now : ``
                    };

                  $.each(data.hours, (i, work_type) => {

                  hours.regular = work_type.hours_type,

                  hours.open_now = (work_type.is_open_now) ? `Open Now` : `Closed`

                    });

                    let transaction = ``;

                    $.each(data.transactions, (i, transact) => {

                        if(transact == 'delivery')
                        {
                            transaction += `<i style="color:#00ccff; font-size:1rem;" class="fas fa-shipping-fast" aria-hidden="true"></i>  Delivery &emsp;` ;
                        } else{

                            transaction += `<i style="color:#F783AC; font-size:1rem;" class="fas fa-building" aria-hidden="true"></i>  Pickup &emsp;` ;
                        }

                    });
                    
                    let rating = getRating(data.rating);

                    let map = `  <div class="col-md-6"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=`+restaurant.name+`&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>`;
                    
        
                    let claimed = (data.is_claimed) ? `<i class="fas fa-check-square"></i> claimed`:``

                    let dom = `<div class="container-fluid">
                        <div class="row">
                        </div>
                        <h3 style="display:inline;" class="mb-0"><b>`+data.name+`</b></h3> &emsp; <small style="color:blue">`+ claimed+`</small>

                        <p class="text-muted">Quality is our riority</p>
                        <div class="row">
                          <div class="col-md-6">

                            <div class="carousel slide" data-ride="carousel" id="carousel">
                              <div class="carousel-inner">
                               `+dyn_img+`
                                <div class="carousel-item active"> <img style="max-height:400px;" class="d-block img-fluid w-100" src="`+data.image_url+`">
                                  <div class="carousel-caption">
                                    <h5 class="m-0">Carousel</h5>
                                    <p>with controls</p>
                                  </div>
                                </div>
                                <div class="carousel-item active">
                                  <div class="carousel-caption">
                                    <h5 class="m-0">Carousel</h5>
                                    <p>with controls</p>
                                  </div>
                                </div>
                              </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style=""> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
                            </div>
                          </div>
                          `+map+`
                        
                        </div><br>
                        <div class="row">
                          <div class="col-md-12" style="">
                            <div class="row">
                              <div class="col-md-2" style=""><i class="fa fa-map-marker text-primary"></i> `+restaurant.address+`</div>
                              <div class="col-md-2">
                                 `+ transaction +`  
                              </div>
                              <div class="col-md-2" style="">
                                <button id="placeOrder" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong">
                                  Place Order <i class="fa fa-shopping-cart fa-fw">
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <span class="font12 block spacing1 font400 text-center">Min: `+data.price+`</span></div>
                            </div>
                            <div class="row">
                              <div class="col-md-4" style="">
                                <div class="col-md-12 col-6 p-4 "> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                  <h4> <b>Categories</b></h4>
                                  <ol>
                                     `+category+`
                                  </ol>
                                </div>
                              </div>
                              <div class="col-md-4" style="">
                                <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                  <h4> <b>Contact</b> </h4>
                                  <p>
                                    <i class="fa fa-map-marker text-dark "></i>&nbsp;&nbsp;`+data.location.address1+`<br>
                                    <i class="fa fa-envelope">&nbsp;&nbsp;www.shintaul@bog_gov.co.uk</i> <br>
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;Tel: `+data.phone+` , `+data.display_phone+`
                                    <br>
                                  </p>
                                </div>
                              </div>
                              <div class="col-md-4" style="">
                                <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                  <h4> <b>Contact</b> </h4>
                                  <p>
                                    <i class="fa fa-map-marker text-dark ">Ap #867-859 Sit Rd. Azusa New York 39531 (793) 151-6230</i>
                                    <i class="fa fa-envelope">www.shintaul@bog_gov.co.uk</i>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              

                      <div col-md-8 col-lg-8>
                      <span class="heading">User Rating</span>
                          `+rating+`
                      <p>`+data.rating+` average based on `+data.review_count+` reviews.</p>
                      <hr style="border:3px solid #f1f1f1">
                      <div class="row">
                        <div class="side">
                          <div>5 star</div>
                        </div>
                        <div class="middle">
                          <div class="bar-container">
                            <div class="bar-5"></div>
                          </div>
                        </div>
                        <div class="side right">
                          <div>150</div>
                        </div>
                        <div class="side">
                          <div>4 star</div>
                        </div>
                        <div class="middle">
                          <div class="bar-container">
                            <div class="bar-4"></div>
                          </div>
                        </div>
                        <div class="side right">
                          <div>63</div>
                        </div>
                        <div class="side">
                          <div>3 star</div>
                        </div>
                        <div class="middle">
                          <div class="bar-container">
                            <div class="bar-3"></div>
                          </div>
                        </div>
                        <div class="side right">
                          <div>15</div>
                        </div>
                        <div class="side">
                          <div>2 star</div>
                        </div>
                        <div class="middle">
                          <div class="bar-container">
                            <div class="bar-2"></div>
                          </div>
                        </div>
                        <div class="side right">
                          <div>6</div>
                        </div>
                        <div class="side">
                          <div>1 star</div>
                        </div>
                        <div class="middle">
                          <div class="bar-container">
                            <div class="bar-1"></div>
                          </div>
                        </div>
                        <div class="side right">
                          <div>20</div>
                        </div>
                      </div>
                      </div>
                      <!-- Button trigger modal -->
                    <button id="revBut" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                      View Details
                    </button> 
                    <button id="hideBut" type="button" class="btn btn-info" style="display:none;">
                      See reviews
                    </button> 


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                     

            <div class="py-5 section-parallax" style="background-image: url(''); transition: all 0.25s;" id="schedule">
                
              <div class="container section-aquamarine">
            <div class="row">
        <div class="col-md-12" style="">
          <h1 class="text-white mt-4">Schedule</h1>
        </div>
      </div>
      <div class="row">
        <div class="p-4 col-lg-8  offset-md-2" style="">
          <div class="card text-dark">
            <div class="card-block text-center p-2">
              <h2>DAYS TO PLACE ORDERS&nbsp;</h2>
              <p class="lead">`+hours.regular+`</p>
              <p class="lead">`+hours.open_now+`</p>
            </div>
      
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><br>Monday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00</li>
              <li class="list-group-item"><br>Tuesday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00</li>
              <li class="list-group-item"><br>Wednessday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00</li>
              <li class="list-group-item "><br>Thursday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30</li>
              <li class="list-group-item"><br>Friday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00</li>
              <li class="list-group-item"><br>Saturday&nbsp;<br><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00</li>
              <li class="list-group-item"><b><span style="color:red;">Sunday- closed</span></b></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row text-left text-dark">
      </div>
    </div>
  </div>   

  <div id="main-revDiv" class="py-5" style="display:none">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>what are people saying?</h1>
        </div>
      </div>
      <div id="divreview" class="row justify-content-center">
      </div>
    </div>
  </div>`;
 
                    $('#speakers').append(dom);


                    $('#speakers').show();

                    console.log(data);


                    $('#revBut').click(function(e){

                      e.preventDefault();

                      $(this).hide()

                      $('#hideBut').show();
                      

                      getBusinessReviews(data.id)

                    });


                    $('#hideBut').click(function(e){

                          e.preventDefault();

                          $(this).hide()

                          $('#revBut').show();

                          $('#main-revDiv').fadeOut(3000);

                          $('#divreview').val('');
                          
                    });
                }
            });
        }


        function getRating(ratingVar)
        {

          let rating = ``;

          for(var i = 1; i <= 5; i++)
          {
              if(i <= ratingVar)
              {
                  rating += `<span class="fa fa-star checked"></span>`;

              }else if(ratingVar == 1+0.5){
                
                rating += `<i style="#FD7E14" class="fa fa-star-half-o"></span>`;
              
              }else {

                  rating +=  `<span class="fa fa-star"></span>`
              }
          }

              return rating;

        }

@include('reviews')

        
});
</script>


{{-- </html> --}}
{{-- 
https://s3-media1.fl.yelpcdn.com/bphoto/mjMHObH17E2NykWJufuVSg/o.jpg --}}