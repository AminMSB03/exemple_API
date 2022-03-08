<?php
$servername = "localhost";
$username = "Amine";
$password = "teste123";
$conn =new PDO("mysql:host=$servername;dbname=pizzas", $username, $password);


$query = "SELECT * FROM pizza ";
$stmt = $conn->prepare($query);
$stmt->execute();

// echo "<pre>";
// print_r($result);
// echo "</pre>";

if($stmt){


    $array = array();
    $array['data'] = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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

