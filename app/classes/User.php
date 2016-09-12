<?php


class User
{
    public function __construct($email)
    {
        $_SESSION['user'] = $email;
    }
}