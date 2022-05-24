<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

function datos()
{
    return array(0 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'M019', 'DEVICE' => 'mobile', 'COUNTER' => 1.7200000286102,), 1 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A300', 'DEVICE' => 'mobile', 'COUNTER' => 1.75,), 2 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A250', 'DEVICE' => 'mobile', 'COUNTER' => 1.4579999446869,), 3 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A200', 'DEVICE' => 'mobile', 'COUNTER' => 1.1499999761581,), 4 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A199', 'DEVICE' => 'mobile', 'COUNTER' => 1.1440000534058,), 5 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'A100', 'DEVICE' => 'mobile', 'COUNTER' => 0.58329999446869,), 6 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'A050', 'DEVICE' => 'mobile', 'COUNTER' => 0.30000001192093,), 7 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D080', 'DEVICE' => 'mobile', 'COUNTER' => 0.46799999475479,), 8 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D040', 'DEVICE' => 'mobile', 'COUNTER' => 0.23999999463558,), 9 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D020', 'DEVICE' => 'mobile', 'COUNTER' => 0.125,), 10 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'M019', 'DEVICE' => 'mobile', 'COUNTER' => 1.7200000286102,), 11 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A300', 'DEVICE' => 'mobile', 'COUNTER' => 1.75,), 12 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A250', 'DEVICE' => 'mobile', 'COUNTER' => 1.4579999446869,), 13 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A200', 'DEVICE' => 'mobile', 'COUNTER' => 1.1499999761581,), 14 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A199', 'DEVICE' => 'mobile', 'COUNTER' => 1.1440000534058,), 15 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A100', 'DEVICE' => 'mobile', 'COUNTER' => 0.58329999446869,), 16 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'A050', 'DEVICE' => 'mobile', 'COUNTER' => 0.30829998850822,), 17 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'D080', 'DEVICE' => 'mobile', 'COUNTER' => 0.46799999475479,), 18 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'D040', 'DEVICE' => 'mobile', 'COUNTER' => 0.24400000274181,), 19 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'D020', 'DEVICE' => 'mobile', 'COUNTER' => 0.12700000405312,),);
}

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["api_key"])) {
    http_response_code(400);    
    echo json_encode(array("response"=>"Bad Request"));
    
}
else if (md5(date("d-m-Y")) !== $data["api_key"]) {
    http_response_code(401);    
    echo json_encode(array("response"=>"Unauthorized"));    
}
else {
    http_response_code(200);
    echo json_encode(array("response" => datos()));
}
