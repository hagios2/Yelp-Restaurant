    function getBusinessReviews(businessId)
    {

      $('#main-rev').empty();

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

                let revdiv = ``;
                
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

                  revdiv += `<div class="col-lg-4 col-md-6 p-4">
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

                  });

                  $('#main-rev').append(revdiv);

                  $('#revDiv').show();
             }
                
        });

    }


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

                                  category += `<p>`+cat.title+`</p>`

                          });

                          let rating = getRating(delivery.rating)

                          let map = `  <div class="col-md-6"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=`+delivery_company.name+`&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>`;

                          let delivery_dom = ` <div class="container-fluid">
                            <div class="row">
                            </div>
                            <h3 style="display:inline;" class="mb-0"><b>`+delivery.name+`</b></h3> &emsp; <small style="color:blue">`+ available+`</small>
                            <p class="text-muted">Quality is our Priority</p>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="card">
                                  <img class="card-img-top" style="max-height:400px;" src="`+ delivery.image_url+`" alt="Card image cap">
                                </div>
                              </div>
                              `+map+`
                            </div><br>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong">Place Order</button>
                            <div class="modal fade" aria-hidden="true" aria-labelledby="exampleModalLongTitle" id="exampleModalLong" role="dialog" tabindex="-1">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class=""><span class="badge badge-success
                                    <button type=" aria-label="Close"> Ordering made easy</span></h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="container-fluid">
                                      <div class="row bg-danger">
                                        <div id="cid_83" class="form-input-wide">
                                          <div style="text-align:center">
                                            <img alt="" class="form-image" style="border:0" src="http://getwallpapers.com/wallpaper/full/0/b/0/1443667-top-wallpaper-fruits-and-vegetables-1920x1200.jpg" height="310px" width="426px" data-component="image">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-header-group  header-default">
                                        <div class="header-text httal htvam">
                                          <h2 id="header_84" class="form-header" data-component="header"> Order Form </h2>
                                        </div>
                                      </div>
                                      <div class="row bg-success">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12 p-4" style="">
                                              <h1>Place your order now</h1>
                                              <p>The Order Form allows customers to make an order and provides delivery, pickup, or catering .</p>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-12 p-4">
                                              <div class="col-md-12" style="">
                                                <h5 class="">First Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Last Name</h5>
                                              </div>
                                              <form>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6"> <input type="text" class="form-control" id="form36" placeholder="First Name"> </div>
                                                  <div class="form-group col-md-6"> <input type="text" class="form-control" id="form37" placeholder="Last Name"> </div>
                                                </div>
                                                <li class="form-line" data-type="control_dropdown" id="id_18">
                                                  <label class="form-label form-label-top" id="label_18" for="input_18"> Restaurant Location </label>
                                                  <div id="cid_18" class="form-input-wide">
                                                    <select class="form-dropdown" id="input_18" name="q18_Restaurant Location" style="width:150px" data-component="dropdown" aria-labelledby="label_18">
                                                      <option value=""> </option>
                                                      <option value="Restaurant&nbsp;A,&nbsp;123&nbsp;Main&nbsp;St.&nbsp;Anytown"> Restaurant&nbsp;A,&nbsp;123&nbsp;Main&nbsp;St.&nbsp;Anytown </option>
                                                      <option value="Restaurant&nbsp;B,&nbsp;321&nbsp;Springfield&nbsp;Ave.&nbsp;South&nbsp;Anytown"> Restaurant&nbsp;B,&nbsp;321&nbsp;Springfield&nbsp;Ave.&nbsp;South&nbsp;Anytown </option>
                                                    </select>
                                                  </div>
                                                </li>
                                                <h5 class="">Phone Number</h5>
                                                <div class="form-group"> <input type="text" class="form-control" id="form38" placeholder="Company"> </div>
                                                <li class="form-line form-line-column form-col-1 allowTime" data-type="control_datetime" id="id_20">
                                                  <div id="cid_20" class="form-input-wide">
                                                    <div data-wrapper-react="true" class="extended">
                                                      <span class="form-sub-label-container " style="vertical-align:top">
                                                        <input type="tel" class="form-textbox validate[limitDate]" id="month_20" name="q20_Date[month]" size="2" data-maxlength="2" value="03" autocomplete="off" aria-labelledby="label_20 sublabel_20_month">
                                                        <span class="date-separate" aria-hidden="true"> &nbsp;- </span>
                                                        <label class="form-sub-label" for="month_20" id="sublabel_20_month" style="min-height:13px" aria-hidden="false"> Month </label>
                                                      </span>
                                                      <span class="form-sub-label-container " style="vertical-align:top">
                                                        <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_20" name="q20_Date[day]" size="2" data-maxlength="2" value="06" autocomplete="off" aria-labelledby="label_20 sublabel_20_day">
                                                        <span class="date-separate" aria-hidden="true"> &nbsp;- </span>
                                                        <label class="form-sub-label" for="day_20" id="sublabel_20_day" style="min-height:13px" aria-hidden="false"> Day </label>
                                                      </span>
                                                      <span class="form-sub-label-container " style="vertical-align:top">
                                                        <input type="tel" class="form-textbox validate[limitDate]" id="year_20" name="q20_Date[year]" size="4" data-maxlength="4" value="2020" autocomplete="off" aria-labelledby="label_20 sublabel_20_year">
                                                        <label class="form-sub-label" for="year_20" id="sublabel_20_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                      </span>
                                                      <h5 class="">&nbsp;</h5><span style="white-space:nowrap;display:inline-block" class="allowTime-container">
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <select class="currentTime time-dropdown form-dropdown validate[limitDate]" id="hour_20" name="q20_Date[hour]" aria-labelledby="label_20 sublabel_20_hour">
                                                            <option> </option>
                                                            <option selected="" value="1"> 1 </option>
                                                            <option value="2"> 2 </option>
                                                            <option value="3"> 3 </option>
                                                            <option value="4"> 4 </option>
                                                            <option value="5"> 5 </option>
                                                            <option value="6"> 6 </option>
                                                            <option value="7"> 7 </option>
                                                            <option value="8"> 8 </option>
                                                            <option value="9"> 9 </option>
                                                            <option value="10"> 10 </option>
                                                            <option value="11"> 11 </option>
                                                            <option value="12"> 12 </option>
                                                          </select>
                                                          <span class="date-separate" aria-hidden="true"> &nbsp;: </span>
                                                          <label class="form-sub-label" for="hour_20" id="sublabel_20_hour" style="min-height:13px" aria-hidden="false"> Hour </label>
                                                        </span>
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <select class="time-dropdown form-dropdown validate[limitDate]" id="min_20" name="q20_Date[min]" aria-labelledby="label_20 sublabel_20_minutes">
                                                            <option> </option>
                                                            <option value="00"> 00 </option>
                                                            <option value="10"> 10 </option>
                                                            <option selected="" value="20"> 20 </option>
                                                            <option value="30"> 30 </option>
                                                            <option value="40"> 40 </option>
                                                            <option value="50"> 50 </option>
                                                          </select>
                                                          <label class="form-sub-label" for="min_20" id="sublabel_20_minutes" style="min-height:13px" aria-hidden="false"> Minutes </label>
                                                        </span>
                                                        <span class="form-sub-label-container " style="vertical-align:top">
                                                          <select class="time-dropdown form-dropdown validate[limitDate]" id="ampm_20" name="q20_Date[ampm]" aria-labelledby="label_20 sublabel_20_ampm">
                                                            <option value="AM"> AM </option>
                                                            <option selected="" value="PM"> PM </option>
                                                          </select>
                                                          <label class="form-sub-label" for="ampm_20" id="sublabel_20_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> AM/PM Option </label>
                                                        </span>
                                                      </span>
                                                      <span class="form-sub-label-container " style="vertical-align:top">
                                                        <label class="form-sub-label" for="input_20_pick" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="true"> Date Picker Icon </label>
                                                      </span>
                                                    </div>
                                                  </div>
                                                </li>
                                                <h5 class="">Type of order</h5>
                                                <input type="radio" id="male" name="gender" value="male">
                                                <label for="male">Pickup</label>&nbsp;&nbsp; <input type="radio" id="female" name="gender" value="female">
                                                <label for="female">Delivery</label>&nbsp;&nbsp; <input type="radio" id="other" name="gender" value="other">
                                                <label for="other">Restaurant Reservation</label>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Place Order Now</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12" style="">
                                <div class="row">
                        
                                  <div class="p-4 col-lg-4 col-md-1" style="">
                                    <h4><b>Categories</b></h4>  
                                    `+ category +`
                                  </div>
                                  <div class="p-4 col-lg-4 col-md-6" style="">
                                    <h4><b>Contact</b></h4>
                                    <p text-center>
                                      <i class="fa fa-map-marker text-dark "> &nbsp;`+delivery.location.address1+`</i><br>
                                      <i class="fa fa-envelope">&nbsp;www.shintaul@bog_gov.co.uk</i><br>
                                      <i class="fa fa-phone"></i> &nbsp;`+delivery.phone+` , `+delivery.display_phone+`
                                      <br>
                                    </p>
                                  </div>
                                  <div class="p-4 col-lg-4" style="">
                                    <span class="heading">User Rating</span>
                                    `+rating+`
                                    <p>`+delivery.rating+`  average based on `+ data.review_count + ` reviews</p>

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
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12" style="transition: all 0.25s;">
                              </div>
                            </div>
                          </div>
                          
                        </div>`;  

                          $('#delivery').append(delivery_dom);

                          $('#delivery').show();

                          $('#speakers').hide();

                          $('#revDiv').hide();

                          $('.deliveryrevBut').click(function(e){

                            e.preventDefault();

                            $('speakers').hide();

                            getBusinessReviews(delivery.id);

                            $('#close_delivery').click(function(){

                                $('#revDiv').hide();

                                $('#delivery').show();

                            });

                          });
                    
                      });
                  
                    }
          
                });
		      }