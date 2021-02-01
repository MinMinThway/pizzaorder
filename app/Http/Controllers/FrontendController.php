<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Item;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

     public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function menu($id)
    {
    	$category=Category::find($id);
    	return view('frontend.menu',compact('category'));
    }

    public function shopping()
    {
    	return view('frontend.shopping');
    }
    public function orderhistory()
    {
        $orders=Order::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('frontend.orderhistory',compact('orders'));
    }

    public function about()
    {
        return view('frontend.about');
    }

     public function contact()
    {
        return view('frontend.contact');
    }
}
