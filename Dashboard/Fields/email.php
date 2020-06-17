<?php

require "core/init.php";

$email= $_GET['email'];

$user = new User();

$user->EditEmail($email);