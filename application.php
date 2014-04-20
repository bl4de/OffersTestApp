<?php
/*
    Application backend
*/

require 'vendor/autoload.php';
require 'vendor/rb.phar';

$app = new Slim\Slim();

class ObjectMapper {
    public static function map( $obj ) {
        $arr = [];

        foreach ( $obj as $key => $value ) {
            array_push( $arr, [
                "id" => $value->id,
                "company" => $value->company,
                "country" => $value->country,
                "state" => $value->state,
                "city" => $value->city,
                "position" => $value->position,
                "added" => $value->added,
                "link" => $value->link
                ] );
        }
        return $arr;
    }
}


R::setup( 'mysql:host=localhost;dbname=offers', 'root', 'root' );

$app->get( "/offer/:id", function( $id ) use ( $app ) {
        $offer = R::findOne( 'offer', 'id=?', array( $id ) );
        if ( $offer ) {
            $app->response()->header( 'Content-Type', 'application/json' );
            // echo json_encode( ObjectMapper::map( ["offer" => $offer] ));
            echo json_encode( R::exportAll($offer) );
        } else {
            // error handling
        }
    } );

$app->get( "/offers", function() use ( $app ) {
        $offers = R::findAll( 'offer' );
        // print_r($offers);

        $app->response()->header( 'Content-Type', 'application/json' );
        // echo json_encode( ["offers" => ObjectMapper::map( $offers ) ] );
        echo json_encode( R::exportAll($offers) );
    } );

$app->run();
R::close();
