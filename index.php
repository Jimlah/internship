<?php
require './vendor/autoload.php';

use app\User;

$user = new User('Abdullahi', 'Jimoh');

echo '<pre>';
echo var_dump($user);
echo '</pre>';

