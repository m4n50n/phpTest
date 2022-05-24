<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

/* API TEST */
$data = json_decode(file_get_contents("php://input"));

if (empty($data)) {
    http_response_code(400); 
    echo json_encode(array("respuesta" => "Petición incorrecta"));
    echo json_encode("No se ha recibido ningún dato");
}
else {
    http_response_code(200); 
    echo json_encode(array("respuesta"=>$data));
}

?>
