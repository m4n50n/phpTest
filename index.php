<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

/* API TEST */
$data = json_decode(file_get_contents("php://input"));
echo json_encode("Respuesta desde la api");

?>

<style>
*, html, body {
    font-family: 'Roboto', sans-serif;
    color: white;
}

body{
    background: rgb(36,81,166);
    background: linear-gradient(90deg, rgba(36,81,166,1) 11%, rgba(68,129,210,1) 100%);
    padding: 5px 30px;
}

h1 {
    font-weight: lighter;
    padding: 10px;
    margin-bottom: 20px;
}
</style>

<h1>DV API - Test</h1>