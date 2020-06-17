<?php

require "core/init.php";

$name = $_GET['name'];

$user = new User();

$user->EditName($name);