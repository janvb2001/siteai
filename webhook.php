<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
    
    $eigenschappen = $json->queryResult->parameters->Eigenschappen;
    $eenheid = $json->queryResult->parameters->Eenheid;
    $hoeveelheid = $json->queryResult->parameters->Hoeveelheid;
    $nummer = $json->queryResult->parameters->number;

    $speech = "Je wilt $hoeveelheid $nummer $eenheid $eigenschappen in je telefoon. Ik hoop dat we binnenkort kunnen helpen!";
    
    

    $response = new \stdClass();
    $response->fulfillmentText = $speech;
    echo json_encode($response);

}
else
{
    echo "Method not allowed";
}



?>
