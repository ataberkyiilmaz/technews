<?php

namespace App\Helpers;

class Helper
{

    /*public static function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }
        return $str;
    }
*/
    public function lengthValidation($value, $lengthMin, $lengthMax)
    {
        if (strlen($value) < $lengthMin) {
            return false;
        } elseif (strlen($value) > $lengthMax) {
            return false;
        } else {
            return true;
        }
    }
}