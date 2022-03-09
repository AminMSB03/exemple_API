<?php
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Methods: POST ");
header("Access-Control-Allow-Headers: * ");

require_once '../models/Pizzas.php';

$data =json_decode(file_get_contents("php://input"));

$createdBy = $data->createdBy;
$date = $data->date;
$elements = $data->elements;

$posts = new Posts();
if($posts->createPizza($createdBy,$date ,$elements)){
    echo json_encode(
        array("message"=>"Pizza created")
    );
}else
{
    echo json_encode(
        array("message"=>"Pizza not created")
    );
}


