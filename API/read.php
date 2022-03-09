<?php
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Methods: * ");
header("Access-Control-Allow-Max-Age: 3600 ");
header("Access-Control-Allow-Headers: * ");

require_once '../models/Pizzas.php';

$posts = new Posts();
$results = $posts->getAllPizzas();



// echo "<pre>";
// print_r($result);
// echo "</pre>";

if($results){


    $array = array();
    $array['data'] = array();

    while($row = $results->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        
        $pizzas = array(
            'id'=>$id,
            'createdBy'=>$createdBy,
            'date'=>$date,
            'elements'=>$elements
        );

        array_push($array['data'],$pizzas);
    }
    echo json_encode($array);
}else
{
    echo json_encode(
        array('message'=>'no data is here')
    );
}

