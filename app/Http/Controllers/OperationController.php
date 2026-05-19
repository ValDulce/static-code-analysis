<?php

namespace App\Http\Controllers;

class OperationController extends Controller
{
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }
}
