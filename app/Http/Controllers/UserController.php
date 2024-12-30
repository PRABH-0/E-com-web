<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\cart;

class UserController extends Controller
{
    //
    function login(Request $req){
        
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function showCart()
{
    // Get the user ID from the session
    $user_id = session()->get('user')['id'];

    // Count the number of items in the cart for the logged-in user
    $cartCount = Cart::where('user_id', $user_id)->count();

    // Return the cart count
    return $cartCount;
}
function register(Request $req){
    $user = new user;
    $user->name=$req->name;
    $user->email=$req->email;
    $user->password = Hash::make($req->password);
    $user->save();
    return redirect('/login');

    // return $user;
}

}
