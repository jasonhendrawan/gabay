<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class Itemctrl extends Controller
{
    public function getall(){
        $items = Item::all();
        
        return view('home', ['items' => $items]);
    }

    public function getid($id){
        $item = Item::findOrFail($id);
        // $item = Item::where('id', $id)->first();
        return view('item', ['item' => $item]);
    }
}
