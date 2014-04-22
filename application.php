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
            echo json_encode( R::exportAll( $offer ) );
        } else {
            // error handling
        }
    } );

$app->get( "/offers", function() use ( $app ) {
        $offers = R::findAll( 'offer' );
        $app->response()->header( 'Content-Type', 'application/json' );
        echo json_encode( R::exportAll( $offers ) );
    } );

$app->delete( "/delete/:id", function( $id ) use ( $app ) {
        try {
            $req = $app->request();
            $offer = R::findOne( 'offer', 'id=?', array( $id ) );
            if ( $offer ) {
                R::trash( $offer );
                $app->response()->status( 204 );
            } else {
                throw new ResourceNotFoundException();
            }

        } catch ( ResourceNotFoundException $e ) {
            $app->response()->status( 404 );
        } catch ( Exception $e ) {
            $app->response()->status( 400 );
            $app->response()->header( 'X-Status-Reason', $e->getMessage() );
        }
    }
);

$app->put( "/change", function() use ( $app ) {
        try {
            $req = $app->request();
            $body = $req->getBody();

            $input = json_decode( $body );

            $offer = R::findOne( 'offer', 'id=?', array( (int)$input->id ) );
            if ( $offer ) {
                $offer->company = (string)$input->company;
                $offer->country = (string)$input->country;
                $offer->state = (string)$input->state;
                $offer->city = (string)$input->city;
                $offer->position = (string)$input->position;
                $offer->status = (string)$input->status;
                $offer->salary = (int)$input->salary;
                $offer->description = (string)$input->description;
                $offer->link = (string)$input->link;

                $id = R::store( $offer );
            }

        } catch ( Exception $e ) {
            $app->response()->status( 400 );
            $app->response()->header( 'X-Status-Reason', $e->getMessage() );
        }
    } );

// add new offer
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
            $offer->status = (string)$input->status;
            $offer->salary = (int)$input->salary;
            $offer->description = (string)$input->description;

            $id = R::store( $offer );
        } catch ( Exception $e ) {
            $app->response()->status( 400 );
            $app->response()->header( 'X-Status-Reason', $e->getMessage() );
        }
    } );
$app->run();
R::close();
