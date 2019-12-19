<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 19/12/19
 * Time: 15:50
 */

namespace App\Http\Controllers;


class CheckMultiplo3y5 extends CheckMultiploAbstract
{
    public function isMultiple($number): bool
    {
        return ($number % 3 == 0) and ($number % 5 == 0);
    }
}
