<?php
$field= new DB("supportlabs_auth");

$token = $_GET('discord_token');

if(COUNT($field->get("discord","id="+$_SESSION['id']))!=1){

$field->Add("discord",array("id","token"),add(array($_SESSION['id'],$token));

echo "refresh";

}

else {
echo "proceed";

}

?>