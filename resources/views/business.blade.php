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

     {{--    <script> --}}

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

                  paginationVars.paginationDataLength = data.length; 

                  paginationVars.paginationData = data;

                  paginationVars.totalNumberOfPage = Math.ceil(paginationVars.paginationDataLength/paginationVars.LengthOfdataPerpage);


                  //paginationVars.dataToDisplay = 

                  $('#main_businessDiv').show();

                  $('#main_businessDiv').html('<br><div id="businessDiv"></div>');


                  $.each(paginationVars.paginationData, function(i, data){

                        $('#businessDiv').append('<div id="main-card-'+i+'" class="card">');

                        $('#main-card-' +i).html('<div class="card-title"><h3>'+ data.name +' </h3></div>');

                        let restaurant = {
                          
                          address : data.location.address1.replace(' ', '%'),

                          name : data.name.replace(' ', '%20'),

                          cords : data.coordinates.latitude +', '+ data.coordinates.longitude,
                        };

                        $('#main-card-' +i).append('<div class="card-img">');//carousel

                        $('card-img').append('<div id="carouselExampleIndicators" class="carousel slide car'+ i +'" data-ride="carousel">' +
                        '<ol id="carol_ind" class="carousel-indicators"></ol>');
                        
                        $('#carol_ind').append('<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>');

                        $('.car'+i).append('<div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100" src="'+ data.image_ul+'" alt="First slide"></div><'); //set slider image to image_url
                       
                        let carousel_id = 1;
                          
                        $.each(data.photos, function(v ,pix){
                      
                          $('#carol_ind').append('<li data-target="#carouselExampleIndicators" data-slide-to="'+carousel_id+'"></li>');

                          $('#carousel-inner').append('<div class="carousel-item"><img class="d-block w-100 card-image-top" style="max-height:30rem;" src="'+pix+'" alt="Second slide">');

                          carousel_id ++;
                          
                        });
                                
                        $('#main-card-' +i).append('<div id="card-body card-body'+ i +'" class="card-body">');

                        $('#card-body'+ i).append('<div id="card-body-row'+i+'" class="row">');

                          $('#card-body-row'+i).append('<div class="col-md-6 col-lg-6">'+'<i class="fas fa-phone"></i> '+data.phone+'<pReviews: '+data.review_count+'></p></div>');

                          $('#card-body-row'+i).append('<div class="class="col-md-4 col-lg-4 offset-5"><iframe width="100%" height="100" src="https://maps.google.com/maps?width=100%&amp;height=100&amp;hl=en&amp;coord='+restaurant.cords+'q=+('+restaurant.name+')&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />');

                          $('#card-body-row'+i).append('</div>');//end row

                        $('#main-card-' +i).append('</div>');//end class card-body

                        $('#main-card-' +i).append('</div> <br>');//end class card
                  
                  });


              }

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

    {{--     </script> --}}

