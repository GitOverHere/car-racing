<?php

require "core/init.php";

$paypal= $_GET['paypal'];

$user = new User();

$user->EditPaypal($paypal);