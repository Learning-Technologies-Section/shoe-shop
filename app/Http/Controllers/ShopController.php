<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ShopController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function show()
    {
        return view('shop');
    }
}