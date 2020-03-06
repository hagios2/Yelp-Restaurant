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

                  $('#revDiv').append(revdiv);

                  $('#revDiv').show();

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



		function getYourLocationDeliverySearch(latitude = '37.786882', longitude = '-122.399972' )
    {

        let data = {

            latitude: latitude,
            longitude: longitude,
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
                      console.log(data);

                      $.each(data.businesses, (i, delivery) => {

                            let deliveries_map = ''; //will be used for maps of all available deliveries in user location


                            let transaction = ``;

                            $.each(data.transactions, (i, transact) => {

                                if(transact == 'delivery')
                                {
                                    transaction += `<i style="color:#00ccff; font-size:1rem;" class="fas fa-shipping-fast" aria-hidden="true"></i>  Delivery &emsp;` ;
                                }else if(transact == 'restaurant_reservation'){
                                  
                                  transaction += `<i style="color:#00ccff; font-size:1rem;" class="fas fa-list" aria-hidden="true"></i>  Delivery &emsp;` ;

                                } else{

                                    transaction += `<i style="color:#F783AC; font-size:1rem;" class="fas fa-building" aria-hidden="true"></i>  Pickup &emsp;` ;
                                }

                            });

                            let available = (delivery.is_closed ) ? `<span style="color:red;">Closed</span>`: `<span >Open</span>`;

                            let delivery_company = {
                                  
                              address : delivery.location.address1.replace(` `, `%`),

                              name : delivery.name.replace(` `, `%20`),

                              cords : delivery.coordinates.latitude +', '+ delivery.coordinates.longitude, 

                          };

                          let category = ``;

                          $.each(delivery.categories, (i, cat) => {

                                  category += ` <li  class="list-group-item">`+cat.title+`</li>`

                          });

                          let rating = getRating(delivery.rating)

                          let map = `  <div class="col-md-6"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=`+delivery_company.name+`&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>`;

                          let delivery_dom = ` <div class="container-fluid">
                                                  <div class="row">
                                                  </div>
                                                  <h3 style="display:inline;" class="mb-0"><b>`+delivery.name+`</b></h3> &emsp; <small style="color:blue">`+ available+`</small>
                                                  <p class="text-muted">Quality is </p>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="card">
                                                        <img class="card-img-top" style="max-height:400px;" src="`+ delivery.image_url+`" alt="Card image cap">
                                                      </div>
                                                    </div>
                                                    `+map+`
                                                  
                                                  </div><br>

                                                <div class="row">
                                                <div class="col-md-12" style="">
                                                  <div class="row">
                                                    <div class="col-md-2" style=""><i class="fa fa-map-marker text-primary"></i>`+delivery_company.address+`</div>
                                                    <div class="col-md-2">
                                                      `+ transaction +`  
                                                    </div>
                                                    <div class="col-md-2" style="">
                                                      <a href="javascript:void(0)" class="btn btn-outline-primary">Place Order<i class="fa fa-shopping-cart fa-fw"></i></a>

                                                  <span class="font12 block spacing1 font400 text-center">Min: `+delivery.price+`</span></div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4" style="">
                                                      <div class="col-md-12 col-6 p-4 "> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                                        <h4> <b>Categories</b></h4>
                                                        <ul class="list-group">
                                                          `+ category +`
                                                        </ul>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4" style="">
                                                    <div class="col-md-10 col-6 p-4" style=""> <i class="d-block fa fa-circle-o fa-3x mb-2 text-muted"></i>
                                                      <h4> <b>Contact</b> </h4>
                                                      <p text-center>
                                                        <i class="fa fa-map-marker text-dark "> &nbsp;`+delivery.location.address1+`</i>
                                                        <i class="fa fa-envelope">&nbsp;www.shintaul@bog_gov.co.uk</i>
                                                        <i class="fa fa-phone"></i> &nbsp;`+delivery.phone+` , `+delivery.display_phone+`
                                                        <br>
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      
                                        <div class="py-5">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="w3-content" style="padding: 30px; border: 3px solid rgb(241, 241, 241);">
                                                  <span class="heading">User Rating</span>
                                                  `+rating+`
                                                  <p>`+delivery.rating+`  average based on `+data.review_count+` reviews.</p>
                                                  <hr style="border:3px solid #f1f1f1">
                                                  <div class="row">
                                                    <div class="side">
                                                      <div>5 star</div>
                                                    </div>
                                                    <div class="middle">
                                                      <div class="bar-container">
                                                        <div class="bar-5"></div>
                                                      </div>
                                                    </div>
                                                    <div class="side right">
                                                      <div>150</div>
                                                    </div>
                                                    <div class="side">
                                                      <div>4 star</div>
                                                    </div>
                                                    <div class="middle">
                                                      <div class="bar-container">
                                                        <div class="bar-4"></div>
                                                      </div>
                                                    </div>
                                                    <div class="side right">
                                                      <div>63</div>
                                                    </div>
                                                    <div class="side">
                                                      <div>3 star</div>
                                                    </div>
                                                    <div class="middle">
                                                      <div class="bar-container">
                                                        <div class="bar-3"></div>
                                                      </div>
                                                    </div>
                                                    <div class="side right">
                                                      <div>15</div>
                                                    </div>
                                                    <div class="side">
                                                      <div>2 star</div>
                                                    </div>
                                                    <div class="middle">
                                                      <div class="bar-container">
                                                        <div class="bar-2"></div>
                                                      </div>
                                                    </div>
                                                    <div class="side right">
                                                      <div>6</div>
                                                    </div>
                                                    <div class="side">
                                                      <div>1 star</div>
                                                    </div>
                                                    <div class="middle">
                                                      <div class="bar-container">
                                                        <div class="bar-1"></div>
                                                      </div>
                                                    </div>
                                                    <div class="side right">
                                                      <div>20</div>
                                                    </div>
                                                  </div>
                                                  <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"> Detailed Statistics </button>  <a id="deliveryrevBut" href="javascript:void(0);" class="btn btn-info" >See reviews</a> <a href="javascript:void(0);" style="display:none" id="hideBut" class="btn btn-info" >Hide reviews</a>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <div id="graph-wrapper">
                                                            <div class="graph-info">
                                                              <a href="javascript:void(0)" class="visitors">Visitors</a>
                                                              <a href="javascript:void(0)" class="returning">Returning Visitors</a>
                                                              <a href="#" id="bars"><span></span></a>
                                                              <a href="#" id="lines" class="active"><span></span></a>
                                                            </div>
                                                            <div class="graph-container">
                                                              <div id="graph-lines"></div>
                                                              <div id="graph-bars"></div>
                                                            </div>
                                                          </div>
                                                          <!-- end Graph HTML -->
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                          <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>`;
                          

                          $('#delivery').append(delivery_dom);

                          $('#delivery').show();

                          //hide speakers div already shown

                          $('#speakers').hide();

                          $('#revDiv').hide();

                          $('#deliveryrevBut').click(function(e){

                            e.preventDefault();

                            $('#deliveryrevBut').hide()

                            $('#hideBut').show();

                            getBusinessReviews(delivery.id)

                          });


                          $('#hideBut').click(function(e){

                                e.preventDefault();

                                $(this).hide()

                                $('#deliveryrevBut').show();

                                $('#revDiv').fadeOut(3000);

                                $('#revDiv').hmtl('');
                          });

                    
                      });
                  
                    }
          
                });
		      }