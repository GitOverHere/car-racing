<?php
include "core/init.php";
$field= new DB("supportlabs_auth");

$token = $_GET['twitter_token'];

$q=$field->get("twitter",array("id","=",$_SESSION['id']));

if($q->_count > 1){

$field->Add("twitter",array("id","token"),array($_SESSION['id'],$token));

echo "refresh";

}
else {
echo "proceed";

}

?>