<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\user;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data =Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            // echo $req->user_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('login');
        }
    }
    function cartlist(){
        $userId= Session::get('user')['id'];
  
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist',['products'=>$data]);

    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
   
    function orderNow(){
        $userId= Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="Pendding";
            $order->payment_method=$req->payment;
            $order->payment_status="pendding";
            $order->save();
        }
        $allCart = Cart::where('user_id',$userId)->delete();
        return redirect('/');
    
    }
    function myOrder(){
        // return "GET";
        $userId= Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=> $orders]);
        // return $orders;

    }
    



}
