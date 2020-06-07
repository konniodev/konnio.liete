<?php
require_once '../util.php';
require_once '../config.inc';
session_start();
use Konnio\Liete\Models\Realtor;

applog("WARN","API called realtor");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $dataObj = json_decode(file_get_contents('php://input'), true);
  $creci = $dataObj["realtorCreci"]."/".$dataObj["realtorEstadoCreci"];
  $realtor = new Realtor($dataObj["realtorEmail"], $dataObj["realtorPassword"], $dataObj["realtorName"],
   $dataObj["realtorMobile"], $creci);
  $resultado = $realtor->create();
  applog("DEBUG", "resultado da query: " . print_r($resultado));
} elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
  header('Content-Type: application/json');
  $myObj = new stdClass();
  $myObj->buildby = "konn.io";
  $myJson = json_encode($myObj);
  echo $myJson;
} else {
    exit;
}

applog("WARN","API finished realtor");

?>