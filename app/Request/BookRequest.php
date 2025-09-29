<?php
namespace App\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Book;


class BookRequest extends FormRequest{
public function authorize(){
    return true;
}
public function rules(){
    return [
        'title' => 'required|max:150',
        'author' => 'required|max:100',
        'year'   => 'required|digits:4|integer|before_or_equal:' . date('Y'),
    ];
}
}


?>