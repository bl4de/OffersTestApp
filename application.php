<?php
/*
    Application backend
    company: '',
                country: '',
                state: '',
                city: '',
                position: '',
                link: ''
*/

require 'vendor/autoload.php';
require 'vendor/rb.phar';

$app = new Slim\Slim();

R::setup( 'mysql:host=localhost;dbname=offers', 'root', 'root' );

$app->get( "/offer/:id", function( $id ) use ( $app ) {
        $offer = R::findOne( 'offer', 'id=?', array( $id ) );
        if ( $offer ) {
            $app->response()->header( 'Content-Type', 'application/json' );
            // echo json_encode( ObjectMapper::map( ["offer" => $offer] ));
            echo json_encode( R::exportAll( $offer ) );
        } else {
            // error handling
        }
    } );

$app->get( "/offers", function() use ( $app ) {
        $offers = R::findAll( 'offer' );
        // print_r($offers);

        $app->response()->header( 'Content-Type', 'application/json' );
        // echo json_encode( ["offers" => ObjectMapper::map( $offers ) ] );
        echo json_encode( R::exportAll( $offers ) );
    } );

$app->post( "/save", function() use ( $app ) {
        try {
            $req = $app->request();
            $body = $req->getBody();

            $input = json_decode( $body );

            $offer = R::dispense( 'offer' );
            $offer->company = (string)$input->company;
            $offer->country = (string)$input->country;
            $offer->state = (string)$input->state;
            $offer->city = (string)$input->city;
            $offer->position = (string)$input->position;
            $offer->link = (string)$input->link;

            $id = R::store( $offer );
        } catch ( Exception $e ) {
            $app->response()->status( 400 );
            $app->response()->header( 'X-Status-Reason', $e->getMessage() );
        }
    } );
$app->run();
R::close();
