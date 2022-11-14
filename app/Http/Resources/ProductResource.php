<?php
 
namespace App\Http\Resources;
 
use Illuminate\Http\Resources\Json\JsonResource;
 
class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'description' => $this->getDescription(),
            'image' => $this->getImage(),
            'comments' => $this->getReviews(),
            'product_url' => "http://127.0.0.1:8000/api/products/{$this->getId()}"
        ];
    }
}