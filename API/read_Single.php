<?php
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Methods: * ");
header("Access-Control-Allow-Max-Age: 3600 ");
header("Access-Control-Allow-Headers: * ");

require_once '../models/Pizzas.php';

$id = isset($_GET['id']) ? $_GET['id'] : die();


$posts = new Posts();
$results = $posts->getPizzaById($id);

$array = array();
$array['data'] = array();

extract($results);

$pizza = array(
    'id'=>$id,
    'createdBy'=>$createdBy,
    'date'=>$date,
    'elements'=>$elements
);

echo json_encode($pizza);
