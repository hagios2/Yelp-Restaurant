@extends('layouts.app')

@section('extra-css')
    
@endsection

@section('content')

    <div id="app" class="container" style="bg">

        <!-- Search form -->
        
        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" id="search" placeholder="Search"
            aria-label="Search"> <br>

            <span id="autocomp"></span>
        </form> <br>

        <span><i class="fas fa-utensils"></i> Restaurant &emsp;| &emsp; <i class="fas fa-coffee"></i> Breakfast and brunch</span>
        <a id="loc_delivery" href="/transactions/delivery">Available delivery</a>


        <div id="main_businessDiv" style="display:none;"></div>
    

    
    </div>
    
@endsection

@section('extra-js')

<script>

    $(document).ready(function(){

        let requests = {
            
            main_url : 'https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/',

            headers: {

                Authorization:'Bearer 0-EMxQYxzSV7h17Si28ZJ1x16_ss86MGSaP6gz3T44mfac2SW0Er4aWAKQt2v0htbS5TRlTN9_B07FMMyb8VeK7BjvJV0DNTjOHIgX-yy32ERf5ZK75oKN9kTghbXnYx'
            },

        };


        $('#search').keyup(function(e){

            let searchItem = e.currentTarget.value; 

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

                            getSearchItem($(this).text());

                        });
                    }

                });        

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

                $('#autocomp').html('');

                $('#autocomp').hide();

                $('#main_businessDiv').show();

                $('#main_businessDiv').html('<br><div class="row" id="businessDiv"></div>');

                $('#scalingDiv').hover(function(){

                    $(this).css({transform: 'scale(1.5)'});
                });

                $.each(data.businesses, function(i ,restaurant){
                    
                    $('#businessDiv').append('<div class="card col-md-4 col-lg-4" style="width: 18rem;"><img class="card-img-top" src="'+restaurant.image_url+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">'+restaurant.name+'<br>Rating: '+ restaurant.rating +'</p><a href="/business/'+restaurant.id+'" class="btn btn-primary">Go somewhere</a></div></div></div></div><br>');
                });

                console.log(data);

            });         

        }

    });

</script>
    
@endsection
