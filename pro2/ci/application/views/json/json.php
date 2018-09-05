<?php
header('Content-type: application/json');//通信头设置
$outputarray = array('status' => '200', 'data' => $jsonArray);
echo json_encode($outputarray);
