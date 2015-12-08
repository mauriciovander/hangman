<?php

/**
 * This file is responsible for
 *
 * @author mauricio
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface GameControllerInterface
{
    public function play(Request $request);

    public function init(Request $request);
}