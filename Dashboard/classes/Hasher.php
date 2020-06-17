<?php
class Hasher{

public static function make($string){
	return password_hash($string, PASSWORD_ARGON2I);
}

public static function unique()
    {
        return self::make(uniqid());
    }
	
function static random($count){
  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $base = strlen($charset);
  $result = '';

  $now = explode(' ', microtime())[1];
  while ($now >= $base){
    $i = $now % $base;
    $result = $charset[$i] . $result;
    $now /= $base;
  }
  return substr($result, $count);
}





}
?>
