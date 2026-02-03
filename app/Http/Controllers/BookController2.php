<?php

namespace App\Http\Controllers;

use App\Models\Book2;
use Illuminate\Http\Request;

class BookController2 extends Controller
{
    // Get all Book2 entries
    public function index()
    {
        return response()->json(Book2::all(), 200);
    }

    // Create a new Book2 entry
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer'
        ]);

        $book = Book2::create($validated);
        return response()->json($book, 201);
    }

    // Get a single Book2 by ID
    public function show($id)
    {
        $book = Book2::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book2 not found'], 404);
        }

        return response()->json($book, 200);
    }

    // Update a Book2 by ID
    public function update(Request $request, $id)
    {
        $book = Book2::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book2 not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer'
        ]);

        $book->update($validated);
        return response()->json($book, 200);
    }

    // Delete a Book2 by ID
    public function destroy($id)
    {
        $book = Book2::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book2 not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book2 deleted successfully'], 200);
    }
}
