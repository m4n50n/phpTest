<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

/* API TEST */
$data = json_decode(file_get_contents("php://input"));
echo json_encode("Respuesta desde la api");

?>
