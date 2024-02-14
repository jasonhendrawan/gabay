<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class Orderctrl extends Controller
{
    public function addToOrder($id)
    {
        $item = Item::where('id', $id)->first();
        $user = auth()->user();

        $orderData = [
            'price' => $item->price,
            'account_id' => $user->id,
            'item_id' => $item->id
        ];

        Order::create($orderData);

        return view('item', ['item' => $item]);
    }

    public function viewAllOrder()
    {
        $items = Order::all();

        return view('order', ['items' => $items]);
    }
    public function deleteItem($id)
    {
        $item = Order::where('id', $id)->first();
        $item->delete();

        $items = Order::all();

        return view('order', ['items' => $items]);
    }

    public function checkout()
    {
        $user = auth()->user();
        $order = Order::where('account_id', $user->id)->get();

        foreach ($order as $item) {
            $item->delete();
        }

        $items = Order::all();

        return view('order', ['items' => $items]);
    }
}
