@extends('layouts.app')

@section('content')

    <div id="app"></div>
    
@endsection

@section('extra-js')

<script>

    $(document).ready(function(){

        let data = {

            term: 'delis',
            latitude: '37.786882',
            longitude: '-122.399972'
        }

        $.ajax({
            
            url: 'https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search',

            headers: {

                Authorization:'Bearer 0-EMxQYxzSV7h17Si28ZJ1x16_ss86MGSaP6gz3T44mfac2SW0Er4aWAKQt2v0htbS5TRlTN9_B07FMMyb8VeK7BjvJV0DNTjOHIgX-yy32ERf5ZK75oKN9kTghbXnYx'
            },
            dataType: 'json',
            method: 'GET',
            data: data
            
        }).done(function(data){

            console.log(data);

        });        

    });


    </script>

    
@endsection
