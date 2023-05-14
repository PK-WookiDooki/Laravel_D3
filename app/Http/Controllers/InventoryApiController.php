<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::when(request()->has('q'), function($query){
            $query->where('name','like',"%".request()->q."%");
            $query->orWhere('price', 'like', "%".request()->q."%");
            $query->orWhere('stock', 'like', "%".request()->q."%");
        })->when(request()->has('name'), function($query){
            $sortType = request()->name ?? 'asc';
            $query->orderBy('name', $sortType);
        })->paginate(7)->withQueryString();

        return response()->json($inventories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        // $request->validate([
        //     'name' => 'required|min:3',
        //     'price' => 'required|numeric|min:500',
        //     'stock' => 'required|numeric|min:3',
        // ]);

        // for validation but (adding Accept=>application/json in headers of postman app is mainly use)
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:500',
            'stock' => 'required|numeric|min:3',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 422);
        }

        $inventory = Inventory::create([
            'name'  => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return response()->json($inventory);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventory = Inventory::find($id);

        if(is_null($inventory)){
            return response()->json(['message' => 'Item Not Found!'], 404);
        }

        return response()->json($inventory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:500',
            'stock' => 'required|numeric|min:3',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 422);
        }
        $inventory = Inventory::find($id);
        if(is_null($inventory)){
            return response()->json(['message' => "Item Not Found!"], 404);
        }

        $inventory->update([
            'name'  => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return response()->json($inventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::find($id);
        if(is_null($inventory)){
            return response()->json(['message' => "Item Not Found!"], 404);
        }
        $inventory->delete();
        return response()->json(['message' => "Item Deleted Successfully!"], 204);
    }
}
