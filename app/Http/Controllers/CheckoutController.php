<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;


class CheckoutController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function show()
    {
        $contents = json_decode(Storage::get('/public/data.json'), true);
        return view('checkout', ['contents' => $contents, 'title' => $contents['title']]);
    }
}