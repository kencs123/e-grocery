<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add($id)
    {
        $item = Item::findOrFail($id);

        $data = [
            'account_id' => Auth::guard('accounts')->user()->id,
            'item_id' => $item->id,
            'price' => $item->price
        
        ];
        Order::create($data);
        return redirect('/cart');
    }

    public function cart()
    {
        $data = [
            'carts' => Order::where('account_id', Auth::guard('accounts')->user()->id)->get()
        ];
        return view('cart', $data);
    }

    public function remove($id)
    {
        $cart = Order::findOrFail($id);
        $cart->delete();
        return redirect('/cart');
    }

    public function order()
    {
        $carts = Order::where('account_id', Auth::guard('accounts')->user()->id)->get();
        foreach ($carts as $cart) {
            $cart->delete();
        }
        return redirect('/success');
    }
}
