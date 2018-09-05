<?php
header('Content-type: application/json');
$outputarray = array('status' => 'error', 'msg' => $errorMsg);
echo json_encode($outputarray);
