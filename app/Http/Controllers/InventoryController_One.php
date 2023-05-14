<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("inventory.index", [
            "items" => Inventory::paginate(8)
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50|unique:inventories,name',
            'price' => 'required|numeric|gte:100',
            'stock' => 'required|numeric|gte:3',
        ]);
        $item = new Inventory();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();
        return redirect()->route("inventory.index");
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
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => 'required|min:3|max:50|unique:inventories,name',
            'price' => 'required|numeric|gte:100',
            'stock' => 'required|numeric|gte:3',
        ]);

        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->stock = $request->stock;
        $inventory->update();
        return redirect()->route("inventory.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back();
    }
}
