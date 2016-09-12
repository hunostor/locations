<?php

namespace App\classes;

/**
 * Class Validator, form adatok tisztitása és validálása
 */
class Validator
{
    /**
     * ellenorzi valoban szabalyos email cimet adtak-e meg
     * @param  string $email barmi lehet
     * @return bool|Exception
     */
    public function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('A megadott emailcím formátuma nem érvényes!');
            return false;
        } else {
            return true;
        }
    }

    public function createToken() {
        $values = range(0, 9);
        $values = range(a, z);
        var_dump($values);
    }
}