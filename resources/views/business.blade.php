@extends('layouts.app')

@section('content')
    
    <div class="container">

        <div id="main_business_page">

           <div class="card col-md-8 col-lg-8" style="height:">

            <div class="card-header" id="business_title"></div>

            <div class="card-title" ></div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol id="carol_ind" class="carousel-indicators">
                  {{-- <li id="first-carol-ind" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> --}}
                 {{--  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                </ol>
                <div id="carol" class="carousel-inner">
                  <div class="carousel-item active">
                    <img id="first-car" style="max-height:30rem;" class="d-block w-100 card-image-top"   alt="First slide">
                  </div>
                  {{-- <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>--}}
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

            let data = {

                latitude: '37.786882',
                longitude: '-122.399972'
                
            };

            $.ajax({

             /*    url: requests.main_url + 'transactions/delivery/search', */
                url: requests.main_url + 'businesses/{{$business_id}}',
                headers: requests.headers,
                dataType: 'json',
                data: data

            }).done(function(data){

             //   $('#main_business_page').html('<div id="bizz" class="row"></div><div></div>');

                $('#first-car').attr('src', data.image_url);

                $('#business_title').html('<p>'+data.name+'</p>')

                let carousel_id = 1;
                
                $.each(data.photos, function(i ,pix){
                    
                  //  $('#bizz').append('<div class="card col" style="height:16rem;"><img class="card-img-top" src="'+pix+'" alt="Card image cap"></div>');
                    $('#carol_ind').append('<li data-target="#carouselExampleIndicators" data-slide-to="'+carousel_id+'"></li>');


                    $('#carol').append('<div class="carousel-item"><img class="d-block w-100 card-image-top" style="max-height:30rem;" src="'+pix+'" alt="Second slide">');

                    carousel_id ++;
                });

                $('#card-body').html('<div>'+'<i class="fas fa-phone"></i> '+data.phone+'<pReviews: '+data.review_count+'></p></div>');

                console.log(data);

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

        });

    </script>
    
@endsection