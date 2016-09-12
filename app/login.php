<?php


require_once 'classes/User.php';

$email = $_POST['user_email'];

new User($email);

