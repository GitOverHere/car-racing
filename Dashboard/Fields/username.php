<?php

require_once "core/init.php";

$username = $_GET['username'];

$user = new User();

$user->EditUsername($username);

