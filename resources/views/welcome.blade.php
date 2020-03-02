@extends('layouts.app')

@section('extra-css')

@yield('loader')
    
@endsection

@section('content')

    <div id="app" class="container-fluid">

        <!-- Search form -->
        
        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" id="search" placeholder="Search"
            aria-label="Search"> <br>

            <span id="autocomp"></span>


        </form> <br>

       <div style="font-size:1rem;" class="d-flex justify-content-center"> <span><i class="fas fa-utensils"></i> Restaurant &emsp;| &emsp; <i class="fas fa-coffee"></i> Breakfast and brunch</span>
      &emsp; | &emsp; <a id="loc_delivery" href="#"><i class="fas fa-shipping-fast"></i> Available delivery</a></div>



    <div class="row">

        <div id="main_businessDiv" style="display:none;" class="col-lg-7 col-md-7 col-sm-10 col-xs-10"></div>

        <div>
            <div style="width: 100%"><iframe id="googlemap" width="300%" height="250" src="https://maps.google.com/maps?width=300%&amp;height=250&amp;hl=en&amp;coord=37.7790262, -122.4199061&amp;q=San%20Francisco%2C%20city%2C%20United%20States%20of%20America+(Restaurant%20Delivery)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates finder</a></iframe></div><br />
           
        </div>


        <div class="col-lg-3 col-md-3"></div>



    </div>
        

    

    
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

            $('div.lds-ellipsis').fadeIn('fast');

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
                        $('#autocomp').fadeIn(3000);

                    }else {


                        $('div.lds-ellipsis').fadeOut('slow');

                        $('#autocomp').fadeIn(3000);

                        $('#autocomp').attr('class', 'justify-content-center');

                        $('#autocomp').css({display:'block', width:'auto'});

                        $('#autocomp').html('<div class="list-group" id="autocompleteList"> </div>');

                        console.log(data);
                        /*  */
                        $.each(data.terms, function(i ,listItem){

                            $('#autocompleteList').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.text+'</a>');
                        }); 


                        $.each(data.categories, function(i ,listItem){
    
                            $('#autocompleteList').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.title+'</a>');
                        }); 

                        $.each(data.businesses, function(i ,listItem){
    
                            $('#autocompleteList').append('<a href="#" id="autocompleteLink" class="list-group-item list-group-item-action">'+listItem.name+'</a>');
                        }); 

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

                $('#main_businessDiv').show();

                $('#main_businessDiv').html('<br><div id="businessDiv"></div>');

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
