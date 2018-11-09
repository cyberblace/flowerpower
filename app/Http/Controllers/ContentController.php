<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderRule;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index()
    {
        $products = Product::where('recommended', '=', 1)->get();

        return view("content.home", compact('products'));
    }

    public function products()
    {
        $products = Product::all();

        return view("content.products", compact('products'));
    }

    public function product(Product $product)
    {
        return view("content.product", compact('product'));
    }

    public function cart(Request $request)
    {
//        $request->session()->forget('shopping_cart');
        $shoppingCart = collect($request->session()->get('shopping_cart'));

        $shoppingCart->map(function ($val) {
            $val->put('product', Product::find($val->get('product_id')));

            return $val;
        });

        return view("content.cart", compact('shoppingCart'));
    }

    public function addToCart(Request $request, Product $product)
    {
        $shoppingCart = collect();
        $shoppingCart->put('id', uniqid());
        $shoppingCart->put('product_id', $product->id);
        $shoppingCart->put('amount', $request->amount);

        $request->session()->push('shopping_cart', $shoppingCart);

        return back();
    }

    public function deleteFromCart(Request $request, $id)
    {
        $cart = collect($request->session()->get('shopping_cart'));

        foreach ($cart->where('id', $id) as $index => $item) {
            $request->session()->forget('shopping_cart.' . $index);
        }

        return back();
    }

    public function updateInCart(Request $request, $id)
    {
        $cart = collect($request->session()->get('shopping_cart'));

        foreach ($cart->where('id', $id) as $index => $item) {
            $item->put('amount', $request->amount);
            $request->session()->put('shopping_cart.' . $index, $item);
        }

        return back();
    }

    public function orders()
    {
        $orders = Auth::user()->orders;

        return view('content.orders', compact('orders'));
    }

    public function order()
    {
        return view('content.order');
    }

    public function submitOrder(Request $request)
    {

    }

    public function cartToOrder(Request $request)
    {
        $order = new Order();
        $order->datetime    = Carbon::now();
        $order->address     = $request->address;
        $order->postal_code = $request->postal_code;
        $order->city        = $request->city;
        if (Auth::check()) {
            $order->user_id = Auth::user()->id;
        }
        $order->save();

        $total = 0;
        foreach ($request->session()->get('shopping_cart') as $cartLine) {
            $product = Product::find($cartLine->get('product_id'));
            $rule = new OrderRule();
            $rule->amount = $cartLine->get('amount');
            $rule->product_id = $product->id;
            $rule->order_id = $order->id;
            $rule->price = $product->price * $cartLine->get('amount');
            $rule->save();
            $total+=$rule->price;
        }
        $order->total = $total;
        $order->save();

        $request->session()->forget('shopping_cart');

        return redirect()->route('orders');

    }

    public function deleteOrder(Request $request, Order $order)
    {
        if (Carbon::now()->format('H') < 12 && $order->datetime->isToday()) {
            foreach ($order->orderRules as $rule) {
                $rule->delete();
            }
            $order->delete();
        }

        return back();
    }

}
