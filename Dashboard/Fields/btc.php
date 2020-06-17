<?php

require "core/init.php";

$btc= $_GET['btc'];

$user = new User();

echo Session::get('id');
$user->EditBTC($btc);