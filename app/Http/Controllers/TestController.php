<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 19/12/19
 * Time: 14:03
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function getNumbers()
    {
        $returnArray = [];
        for ($i = 1; $i <= 100; $i++) {
            $objMultiplos = [
                new CheckMultiplo3('Linio'),
                new CheckMultiplo5('IT'),
                new CheckMultiplo3y5('Linianos')
            ];

            $value = $i;
            foreach ($objMultiplos as $obj) {
                if ($obj->isMultiple($i)) {
                    $value = $obj->getValue();
                }
            }
            $returnArray[] = $value;
        }
        return $returnArray;
    }

}
