<?php
// session_start();
require_once 'vendor/autoload.php';
require_once 'app/bootstrap.php';

use App\classes\Validator;

$valid = new Validator;

$valid->createToken();

echo $template;