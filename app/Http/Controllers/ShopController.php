<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;


class ShopController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function show()
    {
        $contents = json_decode(Storage::get('/public/data.json'), true);
        return view('shop', ['contents' => $contents]);
    }

    public function cart()
    {
        $contents = json_decode(Storage::get('/public/data.json'), true);
        return view('cart', ['contents' => $contents]);
    }
}