<?php
/*
    Application backend
*/

require 'vendor/autoload.php';
require 'vendor/rb.phar';

$app = new Slim\Slim();

class ObjectMaper {
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
        $offer = R::load( 'offer', $id );
        $app->response()->header( 'Content-Type', 'application/json' );
        echo json_encode( $offer );
    } );

$app->get( "/offers", function() use ( $app ) {
        $offers = R::findAll( 'offer' );
        // print_r($offers);

        $app->response()->header( 'Content-Type', 'application/json' );
        echo json_encode( ["offers" => ObjectMaper::map( $offers ) ] );
    } );

$app->run();
R::close();
