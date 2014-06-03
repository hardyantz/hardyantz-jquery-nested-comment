<?php
$array = array( "response" => true );

header('Content-Type: application/json');
echo json_encode($array);