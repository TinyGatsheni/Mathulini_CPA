<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';
require './inc/functions.php';

$app = new \Slim\App;
$func = new Functions();

/**
 * View Filters
 */

$app->map(['GET','POST'],'/asset_primary_view_v', function(Request $request, Response $response){
    global $func;
    $data = json_decode(file_get_contents('php://input'));

    $assets_no =$func->executeQuery($sql);

    if($assets_no){
        
        $res = json_decode($assets_no);
        $length = $res->rows;
        foreach($res->data as $value){

            $response [] = $value->ASSET_ID;
        }
         echo json_encode(array("rows"=>$length,"data" =>$response));
    }
    else{
        echo json_encode(array("rows" => 0 ,"data" =>"Error"));
    }
});

$app->run();
