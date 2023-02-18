<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CartController extends Controller
{
    public function index() {
        $user = auth()->user();
        $items = $user->items;

        return view('pages.cart', compact('user', 'items'));
    }

    public function store(Request $request) {
        Order::create([
            'account_id' => auth()->id(),
            'item_id'    => $request->item_id,
            'price'      => $request->price,
        ]);

        return redirect()->route('cart');
    }

    public function removeFromCart(Request $request) {
        $cartItem = Order::where('account_id', auth()->id())->where('item_id', $request->item_id)->first();
        $cartItem->delete();

        return redirect()->route('cart');
    }

    public function checkout() {
        $items = auth()->user()->items;

        foreach ($items as $item) {
            $item->delete();
            File::delete(public_path('storage/images', $item->image));
        }

        return redirect('success')->with('success', 'Checkout successful!');
    }

    public function success() {
        return view('pages.success');
    }
}
