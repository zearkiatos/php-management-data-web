<?php

$password = "123456";

echo 'Eval 123456 password with expressions /^[0-9]{6,9}$/ <br>';
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password));