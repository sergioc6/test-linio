<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 19/12/19
 * Time: 15:57
 */

namespace App\Http\Controllers;


abstract class CheckMultiploAbstract
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    abstract public function isMultiple(int $number): bool;

    public function getValue()
    {
        return $this->value;
    }
}
