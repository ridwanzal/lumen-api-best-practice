<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  public function index()
  {
      $authors = Author::all();
      return response()->json($authors);
  }

  public function store(Request $request)
  {
      $author = Author::create($request->all());
      return response()->json($author, 201);
  }

  // Display the specified book
  public function show($id)
  {
      $author = Author::find($id);
      if ($author) {
          return response()->json($author);
      } else {
          return response()->json(['message' => 'Book not found'], 404);
      }
  }

  // Update the specified book in storage
  public function update(Request $request, $id)
  {
      $author = Author::find($id);
      if ($author) {
          $author->update($request->all());
          return response()->json($author);
      } else {
          return response()->json(['message' => 'Book not found'], 404);
      }
  }

  // Remove the specified book from storage
  public function destroy($id)
  {
      $author = Author::find($id);
      if ($author) {
          $author->delete();
          return response()->json(['message' => 'Book deleted successfully']);
      } else {
          return response()->json(['message' => 'Book not found'], 404);
      }
  }
}