<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 19/12/19
 * Time: 15:36
 */

namespace App\Http\Controllers;


class CheckMultiplo5 extends CheckMultiploAbstract
{
    public function isMultiple($number): bool
    {
        return ($number % 5 == 0);
    }
}
