<?php

$var1 = 4;
$var2 = NULL;
$var3 = FALSE;
$var4 = 0;

echo $var1;
var_dump(isset($var1)); //true
var_dump(is_null($var1)); //false
var_dump(empty($var1)); //false
echo $var2;
var_dump(isset($var2)); //false
var_dump(is_null($var2)); //true
var_dump(empty($var2)); //true
echo $var3;

var_dump(isset($var3)); //true
var_dump(is_null($var3)); //false
var_dump(empty($var3)); //true
echo $var4;
var_dump(isset($var4)); //true
var_dump(is_null($var4)); //false
var_dump(empty($var4)); //true, el cero como boolean es falso
echo "unset";
