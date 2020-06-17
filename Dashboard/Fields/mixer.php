<?php
include "core/init.php";
$field= new DB("supportlabs_auth");

$token = $_GET['mixer_token'];

$q=$field->get("mixer",array("id","=",$_SESSION['id']));

if($q->_count > 1){

$field->Add("mixer",array("id","token"),array($_SESSION['id'],$token));

echo "refresh";

}
else {
echo "proceed";

}

?>