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

    { box-sizing: border-box; }
        body {
        font: 16px Arial;
        }
        .autocomplete {
        /*the container must be positioned relative:*/
        position: relative;
        display: inline-block;
        }
        input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
        }
        input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
        }
        input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        }
        .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
        }
        .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
        /*when hovering an item:*/
        background-color: #e9e9e9;
        }
        .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: DodgerBlue !important;
        color: #ffffff;
        }

    </style>
    
@endsection

@section('content')

    <div id="app" class="container-fluid">

        <div class="row justify-content-center">
            <img src="https://s3-media0.fl.yelpcdn.com/assets/public/favicon.yelp_styleguide.yji-118ff475a341620f50dfbaddb83efb25.ico" alt="" srcset=""> <h4 class="title">Yelp Restaurant Services</h4> 
        </div> <br>

        <div class="col-md-10 col-lg-10 offset-3">
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
                            <input type="search" id="search" placeholder="Restaurant, meals, pizza" aria-describedby="button-addon2" class="ui-widget form-control border-0 bg-light">
                            </div>
                        </div>

                     </form>
                <!-- End -->
        
            </div>
            </div>
        </div>
        
    
           <div style="font-size:1rem;" class="d-flex justify-content-center"> <span><i class="fas fa-utensils"></i> Restaurant &emsp;| &emsp; <i class="fas fa-coffee"> <a href="#"></i> Breakfast and brunch</a> &emsp; | &emsp; <a id="loc_delivery" href="#"><i class="fas fa-shipping-fast"></i> Available delivery</a></span></div>

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

       // var 

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


        $('#search').keyup(function(e){

            let searchItem = e.currentTarget.value; 

            $('#autocomp').fadeIn('fast');

            if(searchItem != '')
            {

                let data = {

                    text: searchItem,
                    latitude: '37.786882',
                    longitude: '-122.399972'
                }

                $.ajax({
            
                    url: requests.main_url + 'autocomplete',
                    headers: requests.headers,
                    dataType: 'json',
                    data: data
                    
                }).done(function(data){

                    if(jQuery.isEmptyObject(data))
                    {
                        $('#autocomp').attr('class', 'alert alert-info');
                        $('#autocomp').html('No record found');
                        $('#autocomp').fadeIn('fast');

                    }else {


                       // $('div.lds-ellipsis').fadeOut('slow');

                       // $('#autocomp').fadeIn(2000);

                        //$('#autocomp').attr('class', 'justify-content-center');

                      //  $('#autocomp').attr('class', 'justify-content-center');

                        //$('#autocomp').css({display:'block', width:'auto'});

                      //  $('#autocomp').html('<div class="list-group" id="autocompleteList"> </div>');

                      $( "#search" ).autocomplete({
                            source: data.terms
                        });

                        console.log(data);
                        /*  */
                       /*  $.each(data.terms, function(i ,listItem){

                            $('#autocomplete-list').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.text+'</a>');
                        }); 
 */
/* 
                        $.each(data.categories, function(i ,listItem){
    
                            $('#autocompleteList').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.title+'</a>');
                        }); 

                        $.each(data.businesses, function(i ,listItem){
    
                            $('#autocompleteList').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.name+'</a>');
                        }); 
 */
                        $('#autocompleteLink').click(function(){

                            $('#search').val('');

                            $('#autocomp').html('');

                            $('#autocomp').hide();

                            getSearchItem($(this).text());

                        });
                    }

                });        

            } else {

                /* hide autocomplete box if already displayed*/

                $('#autocomp').hide();
            }

        });

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

           /*      $('#scalingDiv').hover(function(){

                    $(this).css({transform: 'scale(1.5)'});
                }); */

                $.each(data.businesses, function(i ,restaurant){


                    getBusiness(restaurant.id)
                    
                  /*   $('#businessDiv').append('<div class="card"><img class="card-img-top" src="'+restaurant.image_url+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">'+restaurant.name+'<br>Rating: '+ restaurant.rating +'</p><a href="/business/'+restaurant.id+'" class="btn btn-primary">Go somewhere</a></div></div></div></div><br>'); */


                });

                console.log(data);

            });         

        }


        @include('business')



    });

</script>
    
@endsection
