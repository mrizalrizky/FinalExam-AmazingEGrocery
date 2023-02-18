<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::paginate(10);

        return view('pages.home', compact('items'));
    }

    public function showDetail($id) {
        $item = Item::find($id);

        return view('pages.item-detail', compact('item'));
    }
}
