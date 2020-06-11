<?
error_log("===========  POST  ============== ".print_r($_POST, true));
error_log("===========  REQUEST  ============== ".print_r($_REQUEST, true));
$entityBody = file_get_contents('php://input');
error_log("===========  TODO  ============== ".print_r($entityBody, true));
?>