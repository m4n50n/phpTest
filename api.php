<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

function datos()
{
    return array(
        0 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'M019', 'DEVICE' => 'mobile', 'COUNTER' => 1.7200000286102, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"TECH")), 
        1 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A300', 'DEVICE' => 'mobile', 'COUNTER' => 1.75, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 6), "START_DATE"=>"01/02/2020", "END_DATE"=>"04/08/2023", "WORK"=>"INDUSTRY")), 
        2 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A250', 'DEVICE' => 'mobile', 'COUNTER' => 1.4579999446869, "MORE_INFO"=>array("RELATIONS_IDS"=>array(5), "START_DATE"=>"01/02/2020", "END_DATE"=>"07/08/2025", "WORK"=>"DATA")), 
        3 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A200', 'DEVICE' => 'mobile', 'COUNTER' => 1.1499999761581, "MORE_INFO"=>array("RELATIONS_IDS"=>array(4), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"TECH")), 
        4 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A199', 'DEVICE' => 'mobile', 'COUNTER' => 1.1440000534058, "MORE_INFO"=>array("RELATIONS_IDS"=>array(5), "START_DATE"=>"01/02/2019", "END_DATE"=>"08/08/2023", "WORK"=>"NETWORK")), 
        5 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'A100', 'DEVICE' => 'mobile', 'COUNTER' => 0.58329999446869, "MORE_INFO"=>array("RELATIONS_IDS"=>array(6), "START_DATE"=>"01/02/2021", "END_DATE"=>"08/08/2025", "WORK"=>"TECH")), 
        6 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'A050', 'DEVICE' => 'mobile', 'COUNTER' => 0.30000001192093, "MORE_INFO"=>array("RELATIONS_IDS"=>"", "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"INDUSTRY")), 
        7 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D080', 'DEVICE' => 'mobile', 'COUNTER' => 0.46799999475479, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2022", "END_DATE"=>"04/08/2025", "WORK"=>"DATA")), 
        8 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D040', 'DEVICE' => 'mobile', 'COUNTER' => 0.23999999463558, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"NETWORK")), 
        9 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'MULTIMEDIA INC', 'DESCRIPTION' => 'D020', 'DEVICE' => 'mobile', 'COUNTER' => 0.125, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"TECH")), 
        10 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'M019', 'DEVICE' => 'mobile', 'COUNTER' => 1.7200000286102, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"TECH")), 
        11 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A300', 'DEVICE' => 'mobile', 'COUNTER' => 1.75, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2019", "END_DATE"=>"04/08/2023", "WORK"=>"TECH")), 
        12 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A250', 'DEVICE' => 'mobile', 'COUNTER' => 1.4579999446869, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2021", "END_DATE"=>"04/08/2023", "WORK"=>"NETWORK")), 
        13 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A200', 'DEVICE' => 'mobile', 'COUNTER' => 1.1499999761581, "MORE_INFO"=>array("RELATIONS_IDS"=>array(4, 5, 6), "START_DATE"=>"04/08/2019", "END_DATE"=>"08/08/2023", "WORK"=>"DATA")), 
        14 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'TECHSAMPLER', 'DESCRIPTION' => 'A199', 'DEVICE' => 'mobile', 'COUNTER' => 1.1440000534058, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"01/02/2020", "END_DATE"=>"04/08/2025", "WORK"=>"INDUSTRY")), 
        15 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'A100', 'DEVICE' => 'mobile', 'COUNTER' => 0.58329999446869, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"04/02/2018", "END_DATE"=>"04/08/2026", "WORK"=>"TECH")), 
        16 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'A050', 'DEVICE' => 'mobile', 'COUNTER' => 0.30829998850822, "MORE_INFO"=>array("RELATIONS_IDS"=>array(2, 3, 4, 5, 6), "START_DATE"=>"05/06/2017", "END_DATE"=>"04/08/2023", "WORK"=>"INDUSTRY")), 
        17 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'D080', 'DEVICE' => 'mobile', 'COUNTER' => 0.46799999475479, "MORE_INFO"=>array("RELATIONS_IDS"=>array(4, 5, 6), "START_DATE"=>"07/03/2019", "END_DATE"=>"04/08/2025", "WORK"=>"TECH")), 
        18 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'DVTESTING', 'DESCRIPTION' => 'D040', 'DEVICE' => 'mobile', 'COUNTER' => 0.24400000274181, "MORE_INFO"=>array("RELATIONS_IDS"=>array(4, 5, 6), "START_DATE"=>"08/02/2019", "END_DATE"=>"08/08/2023", "WORK"=>"NETWORK")), 
        19 => array('CLIENT_ID' => 33113, 'CLIENT_NAME' => 'LINEINFO', 'DESCRIPTION' => 'D020', 'DEVICE' => 'mobile', 'COUNTER' => 0.12700000405312, "MORE_INFO"=>array("RELATIONS_IDS"=>"", "START_DATE"=>"01/02/2017", "END_DATE"=>"04/08/2023", "WORK"=>"DATA")),
    );
}

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["api_key"])) {
    http_response_code(400);
    echo json_encode(array("response" => "Bad Request"));
} else if (md5(date("d-m-Y")) !== $data["api_key"]) {
    http_response_code(401);
    echo json_encode(array("response" => "Unauthorized"));
} else {
    http_response_code(200);
    echo json_encode(array("response" => datos()));
}
