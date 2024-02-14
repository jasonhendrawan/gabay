<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class FoodController extends Controller
{
    public static function getAll() {
        return view('home', [
            'food' => food::all()
        ]);
    }

    public static function getFood($category, $id)
    {
        $food = Food::where('category', $category)->find($id);

        return view('detail', [
            'food' => $food,
        ]);
    }

    public static function getCategory($category)
    {
        return view('navcontent', [
            'food' => Food::where('category', $category)->get(),
        ]);
    }

    // public static function sarapan(){
    //     return view('navcontent', [
    //         'food' => food::all()
    //     ]);
    // }
    // public static function malam(){
    //     return view('malam', [
    //         'food' => food::all()
    //     ]);
    // }
    // public static function dessert(){
    //     return view('dessert', [
    //         'food' => food::all()
    //     ]);
    // }
    public static function about(){
        return view('about', [
            'food' => food::all()
        ]);
    }
}
