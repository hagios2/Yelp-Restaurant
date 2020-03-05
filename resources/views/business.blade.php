<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>shintaul Restaurant</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Aquamarine template for unique events.">
  <meta name="keywords" content="Pingendo conference event aquamarine free template bootstrap 4">
  <!-- CSS dependencies -->
{{--   <link rel="stylesheet" href="/app/aquamarine.css"> --}}
  <link href="{{ asset('css/aquamarine.css') }}" rel="stylesheet">
  <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
{{--   <link rel="stylesheet" href="rating.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
{{--   <script src="js/navbar-ontop.js"></script> --}}
  <script src="{{ asset('js/navbar-ontop.js') }}"></script>
 {{--  <script src="{{ asset('js/rating.js') }}"></script>
  <script src="{{ asset('js/smooth-scroll.js') }}"></script>
  <script src="{{ asset('js/animate.js') }}"></script> --}}
  <script src="{{ asset('js/search.js') }}"></script>

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

      <div class="col-md-10 col-lg-10 col-xs-10 col-sm-10 offset-3">
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
              <i style="color:#EFC050; font-size:1rem;" class="fas fa-gifts" aria-hidden="true"></i>  Enjoy your Day
          </span>

      </div> <br><br>

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

    </div>
          <h1 class="display-2 d-none d-md-block">Shintaul Restaurant</h1>
          <h1 class="display-4 d-block d-md-none">Conference Pingendo</h1>
          <p class="">December 12-14, NYC </p>
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
    <div class="container-fluid">
      <div class="row">
      </div>
      <h3 class="mb-0"><b>Shintaul receipt</b></h3>
      <p class="text-muted">quality is a priority</p>
      <div class="row">
        <div class="col-md-6">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
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
        <div class="col-md-6"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=New%20York&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="">
          <div class="row">
            <div class="col-md-2" style=""><i class="fa fa-map-marker text-primary"></i> Menlo park, CA</div>
            <div class="col-md-4" style=""><a class="btn btn-outline-primary" href="#">Place Order <i class="fa fa-shopping-cart fa-fw"></i> </a>
              <span class="font12 block spacing1 font400 text-center">Min: £15</span></div>
          </div>
          <div class="row">
            <div class="col-md-4" style="">
              <div class="col-md-12 col-6 p-4 "> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                <h4> <b>Categories</b></h4>
                <ol>
                  <li>OILY food</li>
                  <li>OILY food</li>
                  <li>OILY food</li>
                </ol>
              </div>
            </div>
            <div class="col-md-4" style="">
              <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                <h4> <b>Contact</b> </h4>
                <p>
                  <i class="fa fa-map-marker text-dark ">Ap #867-859 Sit Rd. Azusa New York 39531 (793) 151-6230</i>
                  <i class="fa fa-envelope">www.shintaul@bog_gov.co.uk</i>
                  <i class="fa fa-phone">Tel: +2334534,+2334535653</i>
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
                  <i class="fa fa-phone">Tel: +2334534,+2334535653</i>
                  <br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="transition: all 0.25s;">
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="w3-content" style="padding: 30px; border: 3px solid rgb(241, 241, 241);">
            <span class="heading">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.0 average based on 254 reviews.</p>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"> Detailed Statistics </button>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="assets/conference/people_6.jpg" width="300"> </div>
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
            <div class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="assets/conference/people_6.jpg" width="300"> </div>
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
  <div class="py-5 section-parallax" style="background-image: url(&quot;assets/conference/schedule.jpg&quot;); transition: all 0.25s;" id="schedule">
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
              <p class="lead">Sundays - CLOSED</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 – Monday</li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;<b>Tuesday</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;<b>Wednesday</b></li>
              <li class="list-group-item "><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;<b>Thursday</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;<b>Friday</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Saturday</b></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row text-left text-dark">
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

        $('#main_businessDiv').show();

        $('#main_businessDiv').html('<div class="offset-lg-1 offset-md-1" id="businessDiv"></div>'); 

    });
}
});/*  */
</script>


</html>



{{-- @extends('layouts.app')

@section('extra-css')

<style>
          .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fed;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}


</style>

    
@endsection

@section('content') --}}
{{--     
    <div class="container">

      <div class="lds-spinner"><div></div><div></div><div></div>

        <div id="main_business_page" style="display:none;">

           <div class="card col-md-8 col-lg-8" style="height:">

            <div class="card-header" id="business_title"></div>

            <div class="card-title" ></div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol id="carol_ind" class="carousel-indicators">
                  {{-- <li id="first-carol-ind" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> --}}
          {{--    
                </ol>
                <div id="carol" class="carousel-inner">
                  <div class="carousel-item active">
                    <img id="first-car" style="max-height:30rem;" class="d-block w-100 card-image-top"   alt="First slide">
                  </div>
            
                </div> 
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card-body"></div>

            
           </div>

        </div>
        
    </div> --}}


{{-- 
            let requests = {
            
                main_url : 'https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/',

                headers: {

                    Authorization:'Bearer 0-EMxQYxzSV7h17Si28ZJ1x16_ss86MGSaP6gz3T44mfac2SW0Er4aWAKQt2v0htbS5TRlTN9_B07FMMyb8VeK7BjvJV0DNTjOHIgX-yy32ERf5ZK75oKN9kTghbXnYx'
                },

            }; --}}

        <script>

      
/* 
                  $('.lds-spinner').fadeOut('slow')

                  $('#main_business_page').fadeIn(3000);

                    $('#first-car').attr('src', data.image_url);

                    $('#business_title').html('<p>'+data.name+'</p>')

                    let carousel_id = 1;
                
                $.each(data.photos, function(i ,pix){


                    
                  //  $('#bizz').append('<div class="card col" style="height:16rem;"><img class="card-img-top" src="'+pix+'" alt="Card image cap"></div>');
                    $('#carol_ind').append('<li data-target="#carouselExampleIndicators" data-slid        <script>e-to="'+carousel_id+'"></li>        <script>');


                    $('#carol').append('<div class="carousel-item"><img class="d-block w-100 card-image-top" style="max-height:30rem;" src="'+pix+'" alt="Second slide">');

                    carousel_id ++;
                });

                $('.card-body').html('<div>'+'<i class="fas fa-phone"></i> '+data.phone+'<pReviews: '+data.review_count+'></p></div>');

                console.log(data); */

                /* $('#autocomp').html('');

                $('#autocomp').hide();

                $('#main_businessDiv').show();

                $('#main_businessDiv').html('<br><div class="row" id="businessDiv"></div>');

                $('#scalingDiv').hover(function(){

                    $(this).css({transform: 'scale(1.5)'});
                });

                $.each(data.businesses, function(i ,restaurant){
                    
                    $('#businessDiv').append('<div class="card" style="width: 18rem;"><img class="card-img-top" src="'+restaurant.image_url+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">'+restaurant.name+'<br>Rating: '+ restaurant.rating+'</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div></div></div><br>');
                });
 */
            });         

        }

</script>

