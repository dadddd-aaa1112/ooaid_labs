<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface ChangeArrayInterface
{
    public function addToArray(): array;

    public function removeFromArray(): array;

}
