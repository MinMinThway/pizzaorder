<?php

namespace App\Http\Controllers;

use App\Item;
use App\Brand;
use App\Subcategory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $items=Item::orderBy('id','desc')->get();
        return view('backend.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories=Subcategory::all();
        $brands=Brand::all();
        return view('backend.item.create',compact('subcategories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'name' => 'required|max:255',
        'codeno'=>'required',
        'photo' => 'required|mimes:jpeg,jpg,png',
        'price'=>'required',
        'discount'=>'required',
        'description'=>'required',
        'subcategory_id'=>'required',
        'brand_id'=>'required',
         ]);
         if ($request->file()) {
            $fileName=time().'_'. $request->photo->getClientOriginalName();
            $filePath=$request->file('photo')->storeAs('itemImg', $fileName, 'public');
            $path= '/storage/'.$filePath;
        }
        $item=new Item;
        $item->name=$request->name;
        $item->codeno=$request->codeno;
        $item->photo=$path;
        $item->price=$request->price;

        $item->discount=$request->discount;
        $item->description=$request->description;
        $item->subcategory_id=$request->subcategory_id;
        $item->brand_id=$request->brand_id;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $subcategories=Subcategory::all();
        $brands=Brand::all();
        return view('backend.item.edit',compact('item','subcategories','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
        'name' => 'required|max:255',
        'codeno'=>'required',
        'photo' => 'sometime|mimes:jpeg,jpg,png',
        'price'=>'required',
        'discount'=>'required',
        'description'=>'required',
        'subcategory_id'=>'required',
        'brand_id'=>'required',
         ]);

         if ($request->file()) {
            $fileName=time().'_'. $request->photo->getClientOriginalName();
            $filePath=$request->file('photo')->storeAs('categoryimg', $fileName, 'public');
            $path= '/storage/'.$filePath;
            $item->photo=$path;
        }
        $item->name=$request->name;
        $item->codeno=$request->codeno;
        
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->subcategory_id=$request->subcategory_id;
        $item->brand_id=$request->brand_id;
        $item->save();
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return view('backend.item.index');
    }
}
