
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
            
            $.each(data.reviews, (i, userreview) => {

              let user = {

                img : '',
                name : ``,
                text : userreview.text,
                time : userreview.time_created
              };

              var rating = getRating(userreview.rating);


              $.each(userreview, (i, review) => {

                console.log(review);

                user.img = review.image_url,
                user.name = review.name

              });

               let revdiv = `<div class="col-lg-4 col-md-6 p-4">
                    <div class="row">
                      <div  class="col-3 p-0 d-flex align-items-center"><img class="img-fluid d-block" src="`+ user.img+`" width="300"> </div>
                      <div class="col-9">
                        <p class="lead mb-1"> <b>#`+user.name +`</b> </p>
                        <p class="mb-0">`+user.text+`</p>
                      </div>
                      <div class="col-md-12" style="">
                        <span class="heading">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; User Rating</span>`+rating+` <span style="marign-left:20%">user.time</span>
                       &nbsp; <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <hr style="border:3px solid #f1f1f1">
                      </div>
                    </div>
                  </div>`;

                  $('#divreview').append(revdiv);

                  $('#main-revDiv').show();

              });
		}
            
    });

}


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
