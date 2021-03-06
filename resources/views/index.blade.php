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

  <!-- CSS dependencies -->

  <link href="{{ asset('css/aquamarine.css') }}" rel="stylesheet">
  <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->

  <script src="{{ asset('js/navbar-ontop.js') }}"></script>
{{--   <script src="{{ asset('js/smooth-scroll.js') }}"></script> --}}
  <script src="{{ asset('js/animate.js') }}"></script>
  

  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

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

.startus {

  display:none;

}
   
  </style>
  <!-- Script: Animated entrance -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
            <a class="nav-link" href="/">Home</a>
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
                    <input type="search" id="search" placeholder="Restaurant, meals, pizza" aria-describedby="button-addon2" class=" form-control border-0 bg-light">&emsp;
                    <div class="spinner-border"  style="display: none; width:2rem; height:2rem;" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    </div>
                </div>
            
             </form>
        <!-- End -->

        <div style="font-size:1rem;" class="d-flex justify-content-center"> <span><a href="javascript:void(0)"><i id="rest-link" class="fas fa-utensils"></i> Restaurant<a> &emsp;| &emsp;<a id="breakfast" href="javascript:void(0)"><i class="fas fa-coffee"></i> Breakfast and brunch</a> &emsp; | &emsp; <a id="loc_delivery" href="javascript:void(0)"><i class="fas fa-shipping-fast" aria-hidden="true"></i> Available delivery</a></span></div> <br> <br>

        <div class="fa-3x" style="display:none;">
          <i style="color:grey;" class="fas fa-spinner fa-pulse"></i>
        </div>

        <div class="startus alert alert-info" style="width:50%; height:5rem;"></div>

    </div> <br>

        

          <h1 class="display-4 d-block d-md-none">Conference Pingendo</h1>
          <div class="digital-clock">00:00:00</div>
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

  <nav aria-label="Page navigation example" id="pagination_nav" style="display:none;">
    <ul class="pagination">
      <li class="page-item">
        <a id="previous-page" class="page-link" href="javascript:void(0)" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="py-5 bg-light col-md-12" id="speakers" style="transition: all 0.25s; display:none;" >
    <button id="close_speakers" type="button" class="close" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{-- insert pages here dynamically  --}}

    <div class="mycontainer"></div>

  </div>

  <div class="py-5 bg-light col-md-12" id="delivery" style="transition: all 0.25s; display:none;" >
    <button id="close_delivery" type="button" class="close" aria-label="Close">
      << Back
    </button>
    {{-- insert pages here dynamically  --}}

  </div>


  <div class="py-5 bg-light col-md-12" id="revDiv" style="transition: all 0.25s; display:none;" >
    <button id="close_review" type="button" class="close" aria-label="Close">
     << Back
    </button>

    <div class="py-5" style="">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>What are people saying?</h1>
          </div>
        </div>
        <div id="main-rev" class="row justify-content-center">
          
    {{-- insert reviews here dynamically  --}}
      
        </div>
      </div>
    </div>

  </div>



  {{-- sliders --}}

{{--   <div class="py-5 section-parallax" style="background-image: url('http://nextrestaurants.com/wp-content/uploads/2018/08/restaurant-marketing-5star-dining.png'); transition: all 0.25s;" id="schedule"> --}}

 <div class="container-fluid" style="background-color:#e5f9f9;"> 


  <div class="container my-4">
    <div class="row">
      <div class="col-md-12">
        <h3 class="">Popular Cuisine</h3>
      </div>
    </div><strong>
      <hr class="my-4">
      <!--Carousel Wrapper-->
    </strong>
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel"><strong>
      <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
        <!--Controls-->
        <div class="controls-top">
          <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
          <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div> <br><br>
        <!--/.Controls-->
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-multi" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-multi" data-slide-to="1"></li>
          <li data-target="#carousel-example-multi" data-slide-to="2" class="active"></li>
          <li data-target="#carousel-example-multi" data-slide-to="3"></li>
          <li data-target="#carousel-example-multi" data-slide-to="4"></li>
          <li data-target="#carousel-example-multi" data-slide-to="5"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://cdn.cnn.com/cnnnext/dam/assets/151215114237-40-thai-food-23-pla-neung-manao-1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Thai cuisine </h4>
                    <p class="card-text">Thai cooking places emphasis on lightly prepared dishes with strong aromatic components and a spicy edge. Thai chef McDang characterises Thai food as demonstrating "intricacy; attention to detail; texture; color; taste; and the use of ingredients with medicinal benefits, as well as good flavor".</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://thumbor.thedailymeal.com/b7ZLaODQZg9sj0u23RmhbsGNAfE=/870x565/filters:focal(2722x1815:2723x1816)/https://www.thedailymeal.com/sites/default/files/story/2017/shutterstock_212193184.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Arab cuisine </h4>
                    <p class="card-text">The cuisines are often centuries old and reflect the culture of great trading in spices, herbs, and foods. The three main regions, also known as the Maghreb, the Fertile Crescent, and the Arabian Peninsula, have many similarities, but also many unique traditions..</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://www.greece10best.com/wp-content/uploads/2016/12/Moussaka-696x475.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">French Cuisine</h4>
                    <p class="card-text">Starting with the Middle Ages that brought rich banquets to the French Revolution, where refined techniques were used, French Cuisine can be called in the 21st century “haute cuisine” one of the most amazing food to taste in the whole wide world.</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://cdn.tasteatlas.com/Images/Dishes/91e1f0236e414f9dbaefe548f5384a20.jpg?w=600&amp;h=450" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Spanish Cuisine</h4>
                    <p class="card-text">For a lighter approach on food, we turn to the Spanish cuisine, containing a variety of meat and fish, as well as vegetables. It is also influenced by the seafood available from the surrounding waters.</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://www.allsaying.com/wp-content/uploads/2016/03/Dumplings.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title"><br>Italian cuisine<br></h4>
                    <p class="card-text">has a great variety of different ingredients which are commonly used, ranging from fruits, vegetables, sauces, meats, etc. In the North of Italy,and different types of cheeses are the most common ingredients.</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/ix1f8ybuajauixmmadgz" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Ukrainian cuisine </h4>
                    <p class="card-text">It is the collection of the various cooking traditions of the Ukrainian people accumulated over many years. </p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.Second slide-->
          <!--Third slide-->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://cdn.cnn.com/cnnnext/dam/assets/170517150325-food-general.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Singaporean cuisine </h4>
                    <p class="card-text">It is diverse and contains elements derived from several ethnic groups, as a result of its history as a seaport with a large immigrant population. Influences include the cuisines of the native Malays,the largest ethnic group, .</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://i.ndtvimg.com/i/2016-06/chinese-625_625x350_81466064119.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title" style="">Mexico cuisine </h4>
                    <p class="card-text">If you were only allowed to eat the food of one country the rest of your life, it would be smart to make it Mexico. The cuisine of the Mesoamerican country has a little bit of everything -- you'll never get bored. Amongst the enchiladas and the tacos and the helados and the quesadillas. </p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.chinahighlights.com/allpicture/2019/11/7b3afb974d7946bbbe397f7c_894x670.webp" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Lebanese Cuisine</h4>
                    <p class="card-text">The Lebanese cuisine is the place where you can taste all the goodness the Middle East has to offer. Foods are generally Mediterranean, high on vegetables, little meat and full of flavors..</p>
                    <a href="javascript:void(0);" class="btn btn-outline-primary">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.Third slide-->
        </div>
        <!--/.Slides-->
      </div>

        <!--/.Carousel Wrapper-->
      </strong>
    </div>

  </div>
  </div>

  </div>
  {{-- sliders --}}

  <!-- Schedule -->
  <div class="py-5" style="background-color:white;">
    <div class="container">

        {{-- most popular restaurants --}}

      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Yelp Quick Reviews</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 p-4">
          <div class="row">
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block"  src="https://s3-media1.fl.yelpcdn.com/photo/jdldXCaiRfhufUO4trNVfw/o.jpg" width="300" style="max-height:130px;"> </div>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media4.fl.yelpcdn.com/photo/SnR0CfsXA8Fq99xmFMrh9w/o.jpg" width="300" style="max-height:130px;"> </div>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media2.fl.yelpcdn.com/photo/KoXGTiU2BqROpH0gihkypw/o.jpg" width="300" style="max-height:130px;"> </div>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media2.fl.yelpcdn.com/photo/LnPAHxcbkuw6szNnofl9yw/o.jpg" width="300" style="max-height:130px;"> </div>
            <div class="col-9">
              <p class="lead mb-1"> <b>#4</b> </p>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media3.fl.yelpcdn.com/photo/6XARUYf3wL79YFmLSd_zVQ/o.jpg" width="300" style="max-height:130px;"> </div>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="https://s3-media1.fl.yelpcdn.com/photo/MT_TgiowKGHvCn4d5R6wjQ/o.jpg" width="300" style="max-height:130px;"> </div>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Add Review</button>
                <!-- Modal: modalPoll -->
                <div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false" aria-hidden="true" style="padding-right: 17px; padding-left: 17px;">
                  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                    <div class="modal-content">
                      <!--Header-->
                      <div class="modal-header">
                        <p class="heading lead">&nbsp;REVIEW</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="white-text">×</span>
                        </button>
                      </div>
                      <!--Body-->
                      <div class="modal-body">
                        <div class="text-center">
                          <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                          <p>
                            <strong>Your opinion matters</strong>
                          </p>
                          <p>Have some ideas how to improve on our rendered services? <strong>Give us your feedback.</strong>
                          </p>
                        </div>
                        <hr>
                        <!-- Radio -->
                        <p class="text-center">
                          <strong>Your rating</strong>
                        </p>
                        <div class="form-check mb-4 text-left" align="center">
                          <input class="form-check-input" name="group1" type="radio" id="radio-179" value="option1" checked="">
                          <label class="form-check-label" for="radio-179">Very good</label>
                        </div>
                        <div class="form-check mb-4" align="left">
                          <input class="form-check-input" name="group1" type="radio" id="radio-279" value="option2">
                          <label class="form-check-label" for="radio-279">Good</label>
                        </div>
                        <div class="form-check mb-4" align="left">
                          <input class="form-check-input" name="group1" type="radio" id="radio-379" value="option3">
                          <label class="form-check-label" for="radio-379">Mediocre</label>
                        </div>
                        <div class="form-check mb-4" align="left">
                          <input class="form-check-input" name="group1" type="radio" id="radio-479" value="option4">
                          <label class="form-check-label" for="radio-479">Bad</label>
                        </div>
                        <div class="form-check mb-4" align="left">
                          <input class="form-check-input" name="group1" type="radio" id="radio-579" value="option5">
                          <label class="form-check-label" for="radio-579">Very bad</label>
                        </div>
                        <div class="rate" align="left"><span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;User Rating</span>
                          <input type="radio" id="star5" name="rate" value="5">
                          <label for="star5" title="text">5 stars</label>
                          <input type="radio" id="star4" name="rate" value="4">
                          <label for="star4" title="text">4 stars</label>
                          <input type="radio" id="star3" name="rate" value="3">
                          <label for="star3" title="text">3 stars</label>
                          <input type="radio" id="star2" name="rate" value="2">
                          <label for="star2" title="text">2 stars</label>
                          <input type="radio" id="star1" name="rate" value="1">
                          <label for="star1" title="text">1 star</label>
                        </div>
                        <!-- Radio -->
                        <p class="text-center">
                          <strong>What could we improve?</strong>
                        </p>
                        <!--Basic textarea-->
                        <div class="md-form">
                          <textarea type="text" id="form79textarea" class="md-textarea form-control" rows="3"></textarea>
                          <label for="form79textarea">Your message</label>
                        </div>
                      </div>
                      <!--Footer-->
                      <div class="modal-footer justify-content-center">
                        <a type="button" href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Send <i class="fa fa-paper-plane ml-1"></i>
                        </a>
                        <a type="button" href="javascript:void(0);" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal: modalPoll -->
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
          <h3>Yelp Restaurant</h3>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

$(document).ready(function(){

  clockUpdate();
  setInterval(clockUpdate, 1000);

  function clockUpdate() {
  var date = new Date();
  $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px #ff0'});
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());

  $('.digital-clock').text(h + ':' + m + ':' + s)
}



  getLocation();

 function getLocation() {
  
    if (navigator.geolocation) {
    
        var location_timeout = setTimeout("geolocFail()", 10000);

        navigator.geolocation.getCurrentPosition(function(position) {
          
        clearTimeout(location_timeout);

        var lat = position.coords.latitude;
        var lng = position.coords.longitude;

        console.log('lat is ' +lat +' and long is '+ lng); 

/*         geocodeLatLng(lat, lng); */

      }, function(error) {

          clearTimeout(location_timeout);

          geolocFail();
      });

  } else {
      // Fallback for no geolocation
      geolocFail();

      }

}
/* 
var loc = function showPosition(position) {

    console.log(position);

    var lat =  position.coords.latitude,
        long = position.coords.longitude,
        cords = lat + ',' + long;

        console.log(cords);
} 

 */

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

        $('.spinner-border').show();

        setTimeout(function(){

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

              if(data)
              {
                $('.spinner-border').hide(); // hide loader
              }

            /*    console.log(data); */

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


        }, 3000);

    }

});


$('#rest-link').click(function(e){

    e.preventDefault();


  $('.spinner-border').show();

      getSearchItem('Restaurant');
  

});

$('#breakfast').click(function(e){

    e.preventDefault();

        getSearchItem('breakfast and brunch');

});



$('#loc_delivery').click(function(e){

    e.preventDefault();

    getYourLocationDeliverySearch()

    $('#close_delivery').click(function(){

        $('#delivery').hide();

    });

});


$('#button-addon2').click(function(e){

    e.preventDefault();

    let userInput = $('#search').val();

    if(userInput != '')
    {
        getSearchItem(userInput);
    }

});

/* $('#close_delivery').click(function(){

    $('#delivery').hide();

    if($('#speakers .mycontainer').length) 
    {

      console.log($('#speaker .mycontainer').length);

        $('speakers').show();
    }else{
      $('speakers').hide();/* $('#close_review').click(function(){

    $('#revDiv').hide();

    if($('#speakers .mycontainer').length)
    {

      $('#speakers').show();

    }else if($('delivery .container-fluid').length){

      $('#delivery').show();

    }

       

}); */

   // } 

/* }); */


$('#close_speakers').click(function(){

    $('#speakers').hide();

    $('.pagination').hide();

});

$( "#search" ).on( "autocompleteselect", function( event, ui ) { 

    /* both label and value are the same  */

    /* call search */
    $('.fa-3x').show()

    setTimeout(function(){

      getSearchItem(ui.item.label)

    }, 2000);

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

      if(data)
      {
          $('.fa-3x').hide();

          
         // $('.startus').attr('class', 'alert alert-info');

          $('.startus').html('Please scroll down <i class="fas fa-hand-point-down"></i>');

          $('.startus').css({'width': '50%', 'heighth': '5rem', 'margin': '0 auto', 'color': 'black' });

          $('.startus').fadeIn();

          $('.startus').fadeOut(4000);


      }

      /* $('#speakers .mycontainer').remove(); */ //remove mycontainer for new search data to be appended into it

          $.each(data.businesses, function(i ,restaurant){                    

              getBusiness(restaurant.id, i) 

            });
            $("#speakers").show();

            console.log($('#speakers .mycontainer').children().length);

            paginate();
          
        });

        
  }


        function getBusiness(businessId)
        {

          let loader = ``

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
                   console.log(data)
                   
  
                    let carousel_num = 1;
                    let dyn_img_li = ``;
                    let dyn_img = ``;

                    let restaurant = {
                          
                        address : (data.location.address1).replace(` `, `%`),

                        name : (data.name).replace(` `, `%20`),

                        cords : data.coordinates.latitude +', '+ data.coordinates.longitude, 

                    };
                    let category = ``;

                    $.each(data.categories, (i, cat) => {

                            category += `<p>`+cat.title+`</p>`
                    });
                    
                    $.each(data.photos, (i, pix) => {
                        
                        dyn_img += `<div class="carousel-item"><img style="max-height:400px;" class="d-block img-fluid w-100" src="`+pix+`">
                                  <div class="carousel-caption">
                                    <h5 class="m-0">Carousel</h5>             
                                    <p>with controls</p>
                                  </div>
                                </div>`;
                        
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
                    
                    let claimed = (data.is_claimed) ? `<i class="fas fa-check-square"></i> claimed`:``;

                    let dom = `<div class="container-fluid">
                              <div class="row">
                              </div>
                              <h3 style="display:inline;" class="mb-0"><b>`+data.name+`</b></h3> &emsp; <small style="color:blue">`+ claimed+`</small>
                              <p class="text-muted">Quality is our Priority</p>
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
                              `+ transaction +`   <a href="javascript:void(0);" class="btn btn-primary show_delivery" >Available Delivery</a>
                              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong">Place Order <i class="fa fa-shopping-cart fa-fw"></i></a> </button>
                              <div class="modal fade" aria-hidden="true" aria-labelledby="exampleModalLongTitle" id="exampleModalLong" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h3 class=""><span class="badge badge-success
                                      <button type=" aria-label="Close"> Ordering made easy</span></h3>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container-fluid">
                                        <div class="row bg-danger">
                                          <div id="cid_83" class="form-input-wide">
                                            <div style="text-align:center">
                                              <img alt="" class="form-image" style="border:0" src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS9Dlclnp8VyOPNcdcbl9fgZ9utQ2I6bNvhM-TfzIeFA0QpjP7r' height="310px" style="width:100%;" data-component="image">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-header-group  header-default">
                                          <div class="header-text httal htvam">
                                            <h2 id="header_84" class="form-header" data-component="header"> Order Form </h2>
                                          </div>
                                        </div>
                                        <div class="row bg-success">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-md-12 p-4" style="">
                                                <h1>Place your order now</h1>
                                                <p>The Order Form allows customers to make an order and provides delivery, pickup, or catering .</p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12 p-4">
                                                <div class="col-md-12" style="">
                                                  <h5 class="">First Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Last Name</h5>
                                                </div>
                                                <form>
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6"> <input type="text" class="form-control" id="form36" placeholder="First Name"> </div>
                                                    <div class="form-group col-md-6"> <input type="text" class="form-control" id="form37" placeholder="Last Name"> </div>
                                                  </div>
                                                  <li class="form-line" data-type="control_dropdown" id="id_18">
                                                    <label class="form-label form-label-top" id="label_18" for="input_18"> Restaurant Location </label>
                                                    <div id="cid_18" class="form-input-wide">
                                                      <select class="form-dropdown" id="input_18" name="q18_Restaurant Location" style="width:150px" data-component="dropdown" aria-labelledby="label_18">
                                                        <option value=""> </option>
                                                        <option value="Restaurant&nbsp;A,&nbsp;123&nbsp;Main&nbsp;St.&nbsp;Anytown"> Restaurant&nbsp;A,&nbsp;123&nbsp;Main&nbsp;St.&nbsp;Anytown </option>
                                                        <option value="Restaurant&nbsp;B,&nbsp;321&nbsp;Springfield&nbsp;Ave.&nbsp;South&nbsp;Anytown"> Restaurant&nbsp;B,&nbsp;321&nbsp;Springfield&nbsp;Ave.&nbsp;South&nbsp;Anytown </option>
                                                      </select>
                                                    </div>
                                                  </li>
                                                  <h5 class="">Phone Number</h5>
                                                  <div class="form-group"> <input type="text" class="form-control" id="form38" placeholder="Company"> </div>
                                                  <li class="form-line form-line-column form-col-1 allowTime" data-type="control_datetime" id="id_20">
                                                    <div id="cid_20" class="form-input-wide">
                                                      <div data-wrapper-react="true" class="extended">
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <input type="tel" class="form-textbox validate[limitDate]" id="month_20" name="q20_Date[month]" size="2" data-maxlength="2" value="03" autocomplete="off" aria-labelledby="label_20 sublabel_20_month">
                                                          <span class="date-separate" aria-hidden="true"> &nbsp;- </span>
                                                          <label class="form-sub-label" for="month_20" id="sublabel_20_month" style="min-height:13px" aria-hidden="false"> Month </label>
                                                        </span>
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_20" name="q20_Date[day]" size="2" data-maxlength="2" value="06" autocomplete="off" aria-labelledby="label_20 sublabel_20_day">
                                                          <span class="date-separate" aria-hidden="true"> &nbsp;- </span>
                                                          <label class="form-sub-label" for="day_20" id="sublabel_20_day" style="min-height:13px" aria-hidden="false"> Day </label>
                                                        </span>
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <input type="tel" class="form-textbox validate[limitDate]" id="year_20" name="q20_Date[year]" size="4" data-maxlength="4" value="2020" autocomplete="off" aria-labelledby="label_20 sublabel_20_year">
                                                          <label class="form-sub-label" for="year_20" id="sublabel_20_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                        </span>
                                                        <h5 class="">&nbsp;</h5><span style="white-space:nowrap;display:inline-block" class="allowTime-container">
                                                          <span class="form-sub-label-container " style="vertical-align:top">
                                                            <select class="currentTime time-dropdown form-dropdown validate[limitDate]" id="hour_20" name="q20_Date[hour]" aria-labelledby="label_20 sublabel_20_hour">
                                                              <option> </option>
                                                              <option selected="" value="1"> 1 </option>
                                                              <option value="2"> 2 </option>
                                                              <option value="3"> 3 </option>
                                                              <option value="4"> 4 </option>
                                                              <option value="5"> 5 </option>
                                                              <option value="6"> 6 </option>
                                                              <option value="7"> 7 </option>
                                                              <option value="8"> 8 </option>
                                                              <option value="9"> 9 </option>
                                                              <option value="10"> 10 </option>
                                                              <option value="11"> 11 </option>
                                                              <option value="12"> 12 </option>
                                                            </select>
                                                            <span class="date-separate" aria-hidden="true"> &nbsp;: </span>
                                                            <label class="form-sub-label" for="hour_20" id="sublabel_20_hour" style="min-height:13px" aria-hidden="false"> Hour </label>
                                                          </span>
                                                          <span class="form-sub-label-container " style="vertical-align:top">
                                                            <select class="time-dropdown form-dropdown validate[limitDate]" id="min_20" name="q20_Date[min]" aria-labelledby="label_20 sublabel_20_minutes">
                                                              <option> </option>
                                                              <option value="00"> 00 </option>
                                                              <option value="10"> 10 </option>
                                                              <option selected="" value="20"> 20 </option>
                                                              <option value="30"> 30 </option>
                                                              <option value="40"> 40 </option>
                                                              <option value="50"> 50 </option>
                                                            </select>
                                                            <label class="form-sub-label" for="min_20" id="sublabel_20_minutes" style="min-height:13px" aria-hidden="false"> Minutes </label>
                                                          </span>
                                                          <span class="form-sub-label-container " style="vertical-align:top">
                                                            <select class="time-dropdown form-dropdown validate[limitDate]" id="ampm_20" name="q20_Date[ampm]" aria-labelledby="label_20 sublabel_20_ampm">
                                                              <option value="AM"> AM </option>
                                                              <option selected="" value="PM"> PM </option>
                                                            </select>
                                                            <label class="form-sub-label" for="ampm_20" id="sublabel_20_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> AM/PM Option </label>
                                                          </span>
                                                        </span>
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <label class="form-sub-label" for="input_20_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true"> Date Picker Icon </label>
                                                        </span>
                                                      </div>
                                                    </div>
                                                  </li>
                                                  <h5 class="">Type of order</h5>
                                                  <input type="radio" id="male" name="gender" value="male">
                                                  <label for="male">Pickup</label>&nbsp;&nbsp; <input type="radio" id="female" name="gender" value="female">
                                                  <label for="female">Delivery</label>&nbsp;&nbsp; <input type="radio" id="other" name="gender" value="other">
                                                  <label for="other">Restaurant Reservation</label>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Place Order Now</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                              <div class="col-md-12" style="">
                                <div class="row">
                                  <div class="col-md-4" style="">
                                    <div class="col-md-12 col-6 p-4 "> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                      <h4> <b>Categories</b></h4>
                                        `+ category +`
                                    </div>
                                  </div>
                                  <div class="col-md-4" style="">
                                    <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                      <h4> <b>Contact</b> </h4>
                                      <p text-center>
                                        <i class="fa fa-map-marker text-dark ">`+data.location.address1+`</i>
                                        <i class="fa fa-envelope">www.shintaul@bog_gov.co.uk</i>
                                        <i class="fa fa-phone"></i> `+data.phone+` , `+data.display_phone+`
                                        <br>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" style="">
                                    <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                      <h4> <b>Contact</b> </h4>
                                      <p text-center>
                                        <i class="fa fa-map-marker text-dark "></i>&nbsp;`+data.location.address1+`<br>
                                        <i class="fa fa-envelope">&nbsp;www.shintaul@bog_gov.co.uk</i> <br>
                                        <i class="fa fa-phone"></i>&nbsp;Tel: `+data.phone+` , `+data.display_phone+`
                                        <br>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  
                      
                        <div class="py-5">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="w3-content" style="padding: 30px; border: 3px solid rgb(241, 241, 241);">
                                  <span class="heading">User Rating</span>
                                  `+rating+`
                                  <p>`+data.rating+`  average based on `+data.review_count+` reviews.</p>
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
                                  <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"> Detailed Statistics </button><a href="javascript:void(0)" class="revBut btn btn-info" >See reviews</a>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div id="graph-wrapper">
                                            <div class="graph-info">
                                              <a href="javascript:void(0)" class="visitors">Visitors</a>
                                              <a href="javascript:void(0)" class="returning">Returning Visitors</a>
                                              <a href="#" id="bars"><span></span></a>
                                              <a href="#" id="lines" class="active"><span></span></a>
                                            </div>
                                            <div class="graph-container">
                                              <div id="graph-lines"></div>
                                              <div id="graph-bars"></div>
                                            </div>
                                          </div>
                                          <!-- end Graph HTML -->
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="py-5 section-parallax" style="background-image: url('https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80'); transition: all 0.25s;" id="schedule">
                        <div class="container section-aquamarine">
                          <div class="row">
                            <div class="col-md-12" style="">
                              <h1 class="text-white mt-4">Our Schedules</h1>
                            </div>
                          </div>
                          <div class="row">
                            <div class="p-4 col-lg-8  offset-md-2" style="">
                              <div class="card text-dark">
                                <div class="card-block text-center p-2">
                                  <h2>DAYS TO PLACE ORDERS&nbsp;</h2>
                                  <p class="lead">`+hours.regular+`</p>
                                  <p class="lead"  style="color:blue">`+hours.open_now+`</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                      <li class="list-group-item"><b>Monday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00</li>
                                      <li class="list-group-item"><b>Tuesday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00</li>
                                      <li class="list-group-item"><b>Wednessday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00</li>
                                      <li class="list-group-item "><b>Thursday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30</li>
                                      <li class="list-group-item"><b>Friday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00</li>
                                      <li class="list-group-item"><b>Saturday</b>-<i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00</li>
                                      <li class="list-group-item"><b><span style="color:red;">Sunday- closed</span></b></li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row text-left text-dark">
                          </div>
                        </div>
                      </div>`;

                    $('#speakers .mycontainer').append(dom);

                    $('.revBut').click(function(e){

                      e.preventDefault(); 

                      $('#speakers').hide();

                      $('.pagination').hide();

                      getBusinessReviews(data.id)

                      $('#close_review').click(function(){

                          $('#revDiv').hide();

                          $('#speakers').show();

                          $('.pagination').hide();

                      });

                    }); 

                    $('.show_delivery').click(function(e){

                      e.preventDefault();

                      $('#speakers').hide();

                      getYourLocationDeliverySearch();

                      $('#close_delivery').click(function(){

                          $('#delivery').hide();

                          $('#speakers').show();

                      });

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


        function paginate()
        {

            console.log('The length is ' + $('.container-fluid').length)

            var numberOfItems =  18//$('.container-fluid').length // Get toObjecttal number of the items that should be paginated
           
            var limitPerPage = 3; // Limit of items per each page
            $('.container-fluid:gt(' + (limitPerPage - 1) + ')').hide(); // Hide all items over page limits (e.g., 5th item, 6th item, etc.)
            var totalPages = Math.round(numberOfItems / limitPerPage); // Get number of pages
            $(".pagination").append('<li class="page-item"><a class="page-link" href="javascript:void(0)">'+1+'</a></li>'); // Add first page marker


            // Loop to insert page number for each sets of items equal to page limit (e.g., limit of 4 with 20 total items = insert 5 pages)
            for (var i = 2; i <= totalPages; i++) {
              $(".pagination").append('<li class="page-item current-page"><a class="page-link" href="javascript:void(0)">'+i+'</a></li>'); // Insert page number into pagination tabs
            }

            // Add next button after all the page numbers  
            $(".pagination").append('<li id="next-page" class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>');

            // Function that displays new items based on page number that was clicked
            $(".pagination li.current-page").on("click", function() {
              // Check if page number that was clicked on is the current page that is being displayed
              if ($(this).hasClass('active')) {
                return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
              } else {
                var currentPage = $(this).index(); // Get the current page number
                $(".pagination li").removeClass('active'); // Remove the 'active' class status from the page that is currently being displayed
                $(this).addClass('active'); // Add the 'active' class status to the page that was clicked on
                $('.container-fluid').hide(); // Hide all items in loop, this case, all the list groups
                var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page number that was clicked on

                // Loop through total items, selecting a new set of items based on page number
                for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                  $('.container-fluid').show(); // Show items from the new page that was selected
                }
              }

            });

            // Function to navigate to the next page when users click on the next-page id (next page button)
            $("#next-page").on("click", function() {
              var currentPage = $(".pagination li.active").index(); // Identify the current active page
              // Check to make sure that navigating to the next page will not exceed the total number of pages
              if (currentPage === totalPages) {
                return false; // Return false (i.e., cannot navigate any further, since it would exceed the maximum number of pages)
              } else {
                currentPage++; // Increment the page by one
                $(".pagination li").removeClass('active'); // Remove the 'active' class status from the current page
                $('.container-fluid').hide(); // Hide all items in the pagination loop
                var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

                // Loop through total items, selecting a new set of items based on page number
                for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                  $(".container-fluid:eq(" + i + ")").show(); // Show items from the new page that was selected
                }

                $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
              }
            });

            // Function to navigate to the previous page when users click on the previous-page id (previous page button)
            $("#previous-page").on("click", function() {
              var currentPage = $(".pagination li.active").index(); // Identify the current active page
              // Check to make sure that users is not on page 1 and attempting to navigating to a previous page
              if (currentPage === 1) {
                return false; // Return false (i.e., cannot navigate to a previous page because the current page is page 1)
              } else {
                currentPage--; // Decrement page by one
                $(".pagination li").removeClass('active'); // Remove the 'activate' status class from the previous active page number
                $(".container-fluid").hide(); // Hide all items in the pagination loop
                var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

                // Loop through total items, selecting a new set of items based on page number
                for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                  $(".container-fluid:eq(" + i + ")").show(); // Show items from the new page that was selected
                }

                $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
              }

            });

              
          $('#pagination_nav').show(); 

        }

@include('reviews')

        
});
</script>
