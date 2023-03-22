<?php

namespace App\Http\Controllers;


use App\Contracts\ChangeArrayInterface;
use Illuminate\Http\Request;

class ArrayController extends Controller implements ChangeArrayInterface
{



    public function addToArray(): array
    {

        $arr = array();
        $newMonth = 'newMonth';
        array_push($arr, $newMonth);

        return $arr;
    }

    public function removeFromArray(): array
    {

        $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];

        unset($months[0]);
        return $months;
    }
}
