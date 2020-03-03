@extends('layouts.app')

@section('extra-css')

    <style>
         .lds-ellipsis {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    }
    .lds-ellipsis div {
    position: absolute;
    top: 33px;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background: #fff;
    animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }
    .lds-ellipsis div:nth-child(1) {
    left: 8px;
    animation: lds-ellipsis1 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(2) {
    left: 8px;
    animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(3) {
    left: 32px;
    animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(4) {
    left: 56px;
    animation: lds-ellipsis3 0.6s infinite;
    }
    @keyframes lds-ellipsis1 {
    0% {
        transform: scale(0);
    }
    100% {
        transform: scale(1);
    }
    }
    @keyframes lds-ellipsis3 {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(0);
    }
    }
    @keyframes lds-ellipsis2 {
    0% {
        transform: translate(0, 0);
    }
    100% {
        transform: translate(24px, 0);
    }
    }

    .form-control:focus {
        box-shadow: none;
    }

    .form-control-underlined {

        border-width: 0;
        border-bottom-width: 1px;
        border-radius: 0;
        padding-left: 0;
    }

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
    
@endsection

@section('content')

    <div id="app" class="container-fluid">

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

        <!-- Search form -->

        <div>

            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                  <h5 class="font-weight-light mb-4 font-italic text-white">Custom rounded search bars with input group</h5>
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
            </div>
        </div>
        
    
           <div style="font-size:1rem;" class="d-flex justify-content-center"> <span><a href="#"><i class="fas fa-utensils"></i> Restaurant<a> &emsp;| &emsp;<a href="#"><i class="fas fa-coffee"></i> Breakfast and brunch</a> &emsp; | &emsp; <a id="loc_delivery" href="#"><i class="fas fa-shipping-fast"></i> Available delivery</a></span></div>

        </div>
        

    <div class="row">

        <div id="main_businessDiv" style="display:none;" class="col-lg-7 col-md-7 col-sm-10 col-xs-10"></div>

        <div class="col-md-4 col-ld-4">

         {{--    <div style="width: 100%"><iframe id="googlemap" width="100" height="250" src="https://maps.google.com/maps?width=300%&amp;height=250&amp;hl=en&amp;coord=37.7790262, -122.4199061&amp;q=San%20Francisco%2C%20city%2C%20United%20States%20of%20America+(Restaurant%20Delivery)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates finder</a></iframe></div><br /> --}}
           
        </div>


        <div class="col-lg-3 col-md-3"></div>



    </div>


    {{--  --}}
        

    

    
    </div>
    
@endsection

@section('extra-js')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>



    $(document).ready(function(){

        var businessId;

        /* 
            declaring var for page pagination
         */
        let paginationVars = {

            totalNumberOfPage : 0,

            paginationData : [],

            startingPage : 1,

            LengthOfdataPerpage : 3,

            dataToDisplay : [],

            paginationDataLength : 0

        };

      

        //   getLocation();

        /* function getLocation() {
            
            if (navigator.geolocation) {
           
                navigator.geolocation.getCurrentPosition(loc);
            }
        }


        var loc = function showPosition(position) {

            console.log(position);
        
            var lat =  position.coords.latitude,
                long = position.coords.longitude,
                cords = lat + ',' + long;

             $('googlemap').attr('src', 'https://maps.google.com/maps?width=300%&amp;height=250&amp;hl=en&amp;q='+cords+'&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed'); 
        } */


        /*

        */
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
    /* 
                        console.log(data); */

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
/* 
                    select: function( event, ui ) {

                        alert('you selected '+ ui.item.label);
                    }, */
                    
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

    /*             paginationVars.paginationDataLength = Object.keys(data).length; 

paginationVars.paginationData = data;

paginationVars.totalNumberOfPage = Math.ceil(paginationVars.paginationDataLength/paginationVars.LengthOfdataPerpage);

   //paginationVars.dataToDisplay = 
 */

                $.each(data.businesses, function(i ,restaurant){


                    getBusiness(restaurant.id, i)
                    
                  /*   $('#businessDiv').append('<div class="card"><img class="card-img-top" src="'+restaurant.image_url+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">'+restaurant.name+'<br>Rating: '+ restaurant.rating +'</p><a href="/business/'+restaurant.id+'" class="btn btn-primary">Go somewhere</a></div></div></div></div><br>'); */

                });

          /*       console.log(data); */

            });         

        }


        function getBusiness(businessId, i)
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
                    console.log(data);

                    $('#main_businessDiv').append('<br><div id="businessDiv '+ i+'"></div>'); 

                   /*  $.each(data, function(i, data){ */

                        $('#businessDiv'+i).append('<div id="main-card '+i+'" class="card">');

                        $('#main-card' +i).append('<div class="card-title"><h3>'+ data.name +' </h3></div>');

                        let restaurant = {
                          
                          address : data.location.address1.replace(' ', '%'),

                          name : data.name.replace(' ', '%20'),

                          cords : data.coordinates.latitude +', '+ data.coordinates.longitude,
                        };

                        $('#main-card' +i).append('<div class="card-img-'+i+'">');//carousel

                        $('.card-img'+i).append('<div id="carouselExampleIndicators" class="carousel slide car'+i+'" data-ride="carousel">' +
                        '<ol id="carol_ind'+i+'" class="carousel-indicators"></ol>');
                        
                        $('#carol_ind'+i).append('<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>');

                        $('.car'+i).append('<div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100" src="'+ data.image_ul+'" alt="First slide"></div><'); //set slider image to image_url
                       
                        let carousel_id = 1;
                          
                        $.each(data.photos, function(v ,pix){
                      
                          $('#carol_ind'+i).append('<li data-target="#carouselExampleIndicators" data-slide-to="'+carousel_id+'"></li>');

                          $('#carousel-inner').append('<div class="carousel-item"><img class="d-block w-100 card-image-top" style="max-height:30rem;" src="'+pix+'" alt="Second slide">');

                          carousel_id ++;
                          
                        });
                                
                        $('#main-card'+i).append('<div id="card-body'+i+'" class="card-body">');

                        $('#card-body'+i).append('<div id="card-body-row'+i+'" class="row">');

                        $('#card-body-row'+i).append('<div class="col-md-6 col-lg-6">'+'<i class="fas fa-phone"></i> '+data.phone+'<pReviews: '+data.review_count+'></p></div>');

                        $('#card-body-row'+i).append('<div class="class="col-md-4 col-lg-4 offset-5"><iframe width="100%" height="100" src="https://maps.google.com/maps?width=100%&amp;height=100&amp;hl=en&amp;coord='+restaurant.cords+'q=+('+restaurant.name+')&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />');

                        $('#card-body-row'+i).append('</div>');//end row

                        $('#main-card'+i).append('</div>');//end class card-body

                        $('#main-card'+i).append('</div> <br>');//end class card
                  
                    //});


              }
 

            });

        }

    });

</script>
    
@endsection
