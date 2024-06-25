<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display a listing of books
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    // Store a newly created book in storage
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    // Display the specified book
    public function show($id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Update the specified book in storage
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if ($book) {
            $book->update($request->all());
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    // Remove the specified book from storage
    public function destroy($id)
    {
        $book = Book::find($id);
        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
  }