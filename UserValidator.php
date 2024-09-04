<?php

class UserValidator 
{
    public function validateEmail($email) : bool 
    {
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

        if (preg_match($pattern, $email)) {
            return true;
        }

        return false;
    }

    public function validatePassword($password) : bool 
    {
        if (strlen($password) <= 8) {
            return false;
        }

        if ( ! preg_match("/[0-9]+/", $password)) {
            return false;
        }

        if ( ! preg_match("/[A-Z]+/", $password)) {
            return false;
        }

        if ( ! preg_match("/[a-z]+/", $password)) {
            return false;
        }

        return true;
    }
}