@extends('layouts.app')

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

@section('content')
    
    <div class="container">

      <div class="lds-spinner"><div></div><div></div><div></div>

        <div id="main_business_page" style="display:none;">

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

              $('.lds-spinner').fadeOut('slow')

              $('#main_business_page').fadeIn(3000);

                $('#first-car').attr('src', data.image_url);

                $('#business_title').html('<p>'+data.name+'</p>')

                let carousel_id = 1;
                
                $.each(data.photos, function(i ,pix){


                    
                  //  $('#bizz').append('<div class="card col" style="height:16rem;"><img class="card-img-top" src="'+pix+'" alt="Card image cap"></div>');
                    $('#carol_ind').append('<li data-target="#carouselExampleIndicators" data-slide-to="'+carousel_id+'"></li>');


                    $('#carol').append('<div class="carousel-item"><img class="d-block w-100 card-image-top" style="max-height:30rem;" src="'+pix+'" alt="Second slide">');

                    carousel_id ++;
                });

                $('.card-body').html('<div>'+'<i class="fas fa-phone"></i> '+data.phone+'<pReviews: '+data.review_count+'></p></div>');

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