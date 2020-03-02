<script>

$(document).ready(function(){

    let requests = {
        
        main_url : 'https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/',

        headers: {

            Authorization:'Bearer 0-EMxQYxzSV7h17Si28ZJ1x16_ss86MGSaP6gz3T44mfac2SW0Er4aWAKQt2v0htbS5TRlTN9_B07FMMyb8VeK7BjvJV0DNTjOHIgX-yy32ERf5ZK75oKN9kTghbXnYx'
        },

    };

    $('#loc_delivery').click(function(e){

        $('div.lds-ellipsis').fadeIn('fast');

        let data = {

            latitude: '37.786882',
            longitude: '-122.399972'
        }

        $.ajax({

            url: requests.main_url + 'transactions/delivery/',
            headers: requests.headers,
            dataType: 'json',
            data: data
            
        }).done(function(data){

            if(jQuery.isEmptyObject(data))
            {
                $('#autocomp').attr('class', 'alert alert-info');
                $('#autocomp').html('No record found');
                $('#autocomp').fadeIn(3000);
                $('#autocomp').fadeOut(3000);

            }else {

                

            }

        });    

    });

});


</script>