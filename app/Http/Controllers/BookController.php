<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->validated();
        $book->fill($data);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->store('books/files', 'public');
            $book->filename = $file->getClientOriginalName();
        }

        $book->save();

        return response()->json(['message' => 'Book updated', 'book' => $book], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
