
function getBusinessReviews(businessId)
{

    let data = {

        latitude: '37.786882',
        longitude: '-122.399972'
                
    };
      
    $.ajax({

        url: requests.main_url + 'businesses/' + businessId +'/reviews',
        headers: requests.headers,
        dataType: 'json',
          
    }).done(function(data){

        if(!jQuery.isEmptyObject(data))
        {
            console.log(data);
            
            $.each(data, (i, review) => {

                var rating = getRating(data.rating);

                let revdiv = `<div class="col-lg-4 col-md-6 p-4">
                    <div class="row">
                      <div  class="col-3 p-0 d-flex align-items-center"> <img class="img-fluid d-block" src="`+review.user.image_url+`" width="300"> </div>
                      <div class="col-9">
                        <p class="lead mb-1"> <b>#`+ i+1 +`</b> </p>
                        <p class="mb-0">`+data.text+`</p>
                      </div>
                      <div class="col-md-12" style="">
                        <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>`+rating+`
                       &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4.1 average based on 254 reviews.</p>
                        <hr style="border:3px solid #f1f1f1">
                      </div>
                    </div>
                  </div>`;

                  $('#divreview').append(revdiv);


            });
		}
            
    });

}
{{-- 

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
</div> --}}


/* 
		function getTransactionSearch(transactionType)
        {

            let data = {

                latitude: '37.786882',
                longitude: '-122.399972', */
				//location : not required when lat and long are provided
                
       /*      };

            $.ajax({

                url: requests.main_url + 'transactions/' + transactionType +'/search',
                headers: requests.headers,
                dataType: 'json', */
              /*   data: data */
/* 
            }).done(function(data){

                if(!jQuery.isEmptyObject(data))
                {
					console.log(data);

				}
			});

		} */



		function getYourLocationDeliverySearch()
        {

            let data = {

                latitude: '37.786882',
                longitude: '-122.399972',
				//location : not required when lat and long are provided
                
            };

            $.ajax({

                url: requests.main_url + 'transactions/delivery/search',
                headers: requests.headers,
                dataType: 'json',
               	data: data 

            }).done(function(data){

                if(!jQuery.isEmptyObject(data))
                {
					console.lgo(data);

				}
			});

		}
