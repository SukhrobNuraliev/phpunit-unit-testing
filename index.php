<?php

require 'functions.php';
require 'classes/Box.php';
require 'classes/User.php';


echo addNumbers(5,5);
echo "\n";

$box = new Box(['Qalam', 'Ruchka', 'Qaychi']);
$box->takeOne();
print_r($box->startsWith('Q'));

echo "\n";
$salim = new User(18, 'Salim');
echo $salim->tellName();
