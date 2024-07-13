<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(10);

        return view('home.userpage',compact('product'));
    }




    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype == '1')
        {
            $product=product::all();
            return view('admin.show_product',compact('product'));
        }
        else
        {
            $product=product::paginate(10);
             return view('home.userpage');
        }
    }

    public function product_details($id)
    {
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }
    
}
