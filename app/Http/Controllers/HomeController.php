<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'items' => Item::paginate(6)
        ];
        return view('user.home', $data);
    }
}
