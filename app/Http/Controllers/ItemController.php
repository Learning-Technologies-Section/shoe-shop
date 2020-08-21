<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function show($id)
    {
        $contents = json_decode(Storage::get('/public/data.json'), true);
        $item = $this->getItemByID($id, $contents);
        return view('item', ['item' => $item]);
    }

    private function getItemByID($id, $contents) 
    {
        // get the selected item
        $item = array_filter($contents["products"], function ($item) use ($id) {
            if ($item["id"] == $id) return $item;
        });
        return array_values($item)[0];
    }
}