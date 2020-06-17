<?php
include "core/init.php";
$field= new DB("supportlabs_auth");

$token = $_GET['youtube_token'];

$q=$field->get("youtube",array("id","=",$_SESSION['id']));

if($q->_count > 1){

$field->Add("youtube",array("id","token"),array($_SESSION['id'],$token));

echo "refresh";

}
else {
echo "proceed";

}

?>