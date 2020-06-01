<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    print_r($data);
  } elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
    header('Content-Type: application/json');
    $myObj = new stdClass();
    $myObj->buildby = "konn.io";
    $myJson = json_encode($myObj);
    echo $myJson;
  } else {
      exit;
  }