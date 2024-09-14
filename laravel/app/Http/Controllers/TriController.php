<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriController extends Controller
{
    public function test()
    {
        dump(auth()->user());
        return 'test';
    }

    public function test2()
    {
        return 'test2';
    }
}
