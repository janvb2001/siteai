<?php
$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){

    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
    
    $vraag = $json->queryResult->queryText;
    $eigenschap = $json->queryResult->parameters->Eigenschappen;
    $eigenschap2 = $json->queryResult->parameters->Eigenschappen1;
    $waarde = $json->queryResult->parameters->number;
    $waarde2 = $json->queryResult->parameters->number1;
    $eenheid = $json->queryResult->parameters->Eenheid;
    $eenheid2 = $json->queryResult->parameters->Eenheid2;
    $antiwoord = $json->queryResult->parameters->"Anti-statement";
    $kwaliteitswoord = $json->queryResult->parameters->Kwaliteitswoord;
    $hoeveelheid = $json->queryResult->parameters->Hoeveelheid;
    $merk = $json->queryResult->parameters->Merk;
    $merk2 = $json->queryResult->parameters->Merk1;
    $kleur = $json->queryResult->parameters->Kleur;
    $kleur2 = $json->queryResult->parameters->Kleur1;
    $software = $json->queryResult->parameters->Software;
    $schermtechniek = $json->queryResult->parameters->Schermtechnieken;
    
    $hoeveelheid = $json->queryResult->parameters->Hoeveelheid;
    $nummer = $json->queryResult->parameters->number;

    

    $speech = "$vraag, $eigenschap, $eigenschap2, $waarde, $waarde2, $eenheid, $eenheid2, $antiwoord, $kwaliteitswoord, $hoeveelheid, $merk, $merk2, $kleur, $kleur2, $software, $schermtechniek";
    
    

    $response = new \stdClass();
    $response->fulfillmentText = $speech;
    echo json_encode($response);

}
else
{
    echo "Method not allowed";
}



?>
