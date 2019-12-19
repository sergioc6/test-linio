<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 19/12/19
 * Time: 15:36
 */

namespace App\Http\Controllers;


class CheckMultiplo3 extends CheckMultiploAbstract
{
    public function isMultiple($number): bool
    {
        return ($number % 3 == 0);
    }
}
