<?php

namespace App\Http\Controllers;

use App\Resources\BookResources;
use App\Models\Books;
use App\Services\BookServices;
use App\Request\BookRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $bookServices;
    public function __construct(BookServices $bookServices) {
        $this->bookServices = $bookServices;
    }
    public function index()
    {
        $books = $this->bookServices->fetchBooks();
        return BookResources::collection($books);
    }
    public function store(BookRequest $request)
    {
        $book = $this->bookServices->createBook($request->validated());
        return new BookResources($book);
    }

    public function show($id)
    {
        $book = $this->bookServices->getBook($id);
        return new BookResources($book);
    }

    public function update( $id, BookRequest $request)
    {
        $book = $this->bookServices->updateBook($id, $request->validated());
        return new BookResources($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = $this->bookServices->deleteBook($id);
        return response()->json([
            'message' => 'Buku berhasil dihapus'
        ], 200);
    }
}
