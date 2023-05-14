<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("book.index", ['books' => Book::paginate(7)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("book.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->summery = $request->summery;
        $book->save();

        return redirect()->route('book.index')->with('status', "Book Added Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("book.show", ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("book.edit", ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->summery = $request->summery;
        $book->update();

        return redirect()->route('book.index')->with('status', "Book Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->back()->with('status', "Book Deleted Successfully!");
    }
}
