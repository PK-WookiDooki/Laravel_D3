<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(){
        return view("inventory.create");
    }

    public function index(){

        // $items = new Inventory();
        // $allItems = $items->all();
        // return($allItems);

        return view("inventory.index", [
            "items" => Inventory::all()
        ]);
    }

    public function show($id){

        // $item = Inventory::find($id);
        // if(is_null($item)){
        //     return abort(404);
        // }
        // return view("inventory.show", compact("item"));

        return view('inventory.show', [
            "item" => Inventory::findOrFail($id)
        ]);
    }

    public function edit($id){
        return view("inventory.edit", [
            "item" => Inventory::findOrFail($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $item = Inventory::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();
        return redirect()->route("inventory.index");
    }

    public function store(Request $request){

        //this whole process is called ORM -> object-relation mapper
        $item = new Inventory();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();


        //by this way, we can add multiple data
        // $item = Inventory::create([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock
        // ]);


        //by query statement
        // $item = Inventory::insert([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock
        // ]);


        //this way is mostly not secure
        // $item = Inventory::create($request->all());

        // dd($request->all());

        return redirect()->route("inventory.index");
    }

    public function destroy($id){
        $item = Inventory::findOrFail($id);
        $item->delete();
        //go back to previous page
        return redirect()->back();
    }

}
