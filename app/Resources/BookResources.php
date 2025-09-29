<?php
namespace App\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResources extends JsonResource{
    
public function toArray(Request $request)
{
    return[
        'id' => $this->id,
        'title' => $this->title,
        'author' => $this->author,
        'year' => $this->year,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at

    ];
}

}

?>