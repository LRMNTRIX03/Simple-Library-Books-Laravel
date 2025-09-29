<?php

namespace App\Services;
use App\Models\Books;
class BookServices{

    public function fetchBooks(){
        return Books::all();
    }
    public function getBook($id){
        return Books::find($id);
    }
    public function createBook(array $data){
        return Books::create($data);
    }
    public function updateBook($id, array $data){
        $book = Books::find($id);
        $book->update($data);
        return $book;
    }
    public function deleteBook($id){
        return Books::destroy($id);
    }

}


?>