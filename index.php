<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
    
    $eigenschappen = $json->result->parameters->Eigenschappen;

    switch ($eigenschappen) {
        case "Opslagruimte":
            $speech = "Je zoekt naar de opslagruimte";
            break;
        case "Geheugen":
            $speech = "Je zoekt naar het geheugen";
            break;
        case "Scherm":
            $speech = "Je zoekt naar het formaat van het scherm";
            break;
        default:
            $speech = "Ik kan niet vinden wat je zoekt.";
            break;
    }
    
    $speech = $eigenschappen;

    $response = new \stdClass();
    $response->speech = $speech;
    $response->displayText = "";
    $response->source = "webhook";
    echo json_encode($response);

}
else
{
    echo "Method not allowed";
}



?>
