<style>

.wpbr-wrap {
	background-color: #023f72;
	padding: 15px;
	border-radius: 3px;
}

/*Review Container*/ 

.wpbr-review {
	background: transparent !important;
	border: none !important;
}

/*Reviewer Name*/

.wpbr-review__reviewer-name {
	color: white !important;
}

/*Review Content*/

.wpbr-review__content > p {
	color: white !important;
}

/*Recommends Text*/ 

span.wpbr-reco__text {
	color: rgba(250, 250, 250, .7);
}

/*Date/Time Stamp*/ 

span.wpbr-review__timestamp {
	color: rgba(250, 250, 250, .4) !important;
}

/*Carousel Pagination Bullets*/

span.swiper-pagination-bullet {
	background-color: white !important;
}

</style>

<div class="wbpr-wrap">

    <div class="wpbr-review">

        <div>
            
        </div>
    </div>

</div>

<script>

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
              /*   data: data */

            }).done(function(data){

                if(!jQuery.isEmptyObject(data))
                {
					console.lgo(data);

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


</script>