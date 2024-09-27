<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function detail($id)
    {
        $data = [
            'item' => Item::findOrFail($id)
        ];
        return view('itemdetail', $data);
    }
}
