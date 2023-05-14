<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Retrieving data with Query Builder
        // $inventories = Inventory::where("id",">",40)->where("price",">","5000")->get();
        // $inventories = Inventory::where('price', '>', 4000)->orWhere('stock', '<', 10)->get();
        // $inventories = Inventory::whereIn('id',[10, 15, 17, 27])->get();
        // $inventories = Inventory::whereBetween('price',[4500, 5000])->get();

        // $inventories = Inventory::when(false, function($query){
            // $query->where("id", "<", 5);
        // })->get();

        // $inventories = Inventory::limit(5)->offset(10)->orderBy('id', "desc")->get();
        // $inventories = Inventory::latest('id')->get();
        // $inventories = Inventory::where('id', '>' , 10)->first();

        // return($inventories);
        // dd($inventories);


        //Retrieving data with Model method -> all();
        //$inventories = Inventory::all();
        // return collect($inventories->first())->values();

        // return ($inventories->sum('price'));

        $inventories = Inventory::when(request()->has('q'), function($query){
            $query->where('name','like',"%".request()->q."%");
            $query->orWhere('price', 'like', "%".request()->q."%");
            $query->orWhere('stock', 'like', "%".request()->q."%");
        })->when(request()->has('name'), function($query){
            $sortType = request()->name ?? 'asc';
            $query->orderBy('name', $sortType);
        })->paginate(7)->withQueryString();

        return view("inventory.index", [
            "items" => $inventories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("inventory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        $item = new Inventory();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();
        return redirect()->route("inventory.index")->with("status", "New Item Create Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view('inventory.show', ["item" => $inventory]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit', ["item" => $inventory]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->stock = $request->stock;
        $inventory->update();
        return redirect()->route("inventory.index")->with("status", "Item Update Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back()->with('status', "Item Delete Successfully!");
    }
}
