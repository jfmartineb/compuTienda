<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Review;
use App\Models\Item;

class Product extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['description'] - string - contains the product description
     * $this->attributes['category'] - string - contains the product category
     * $this->attributes['brand'] - string - contains the product brand
     * $this->attributes['group'] - string - contains the product group
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['stock'] - int - contains the product stock
     * $this->attributes['image'] - string - contains the product image
     * $this->comments - Comment[] - contains the associated comments
     * Image
    */

    protected $fillable = ['name','description','category','brand','group','price','stock','comments','image'];

    public static function validate($request) 
    {
        $request->validate([
            "name" => "required|max:255",
            "category" => "required",
            "brand" => "required",
            "group" => "required",
            "price" => "required|numeric|gt:0",
            "stock" => "required|numeric",
            "description" => "required",
            'image' => 'image',
        ]);
    }

// --------------------------------- ID ---------------------------------------------------
public function getId()
{
    return $this->attributes['id'];
}

public function setId($id)
{
    $this->attributes['id'] = $id;
}
// -------------------------------- NAME -------------------------------------------------
public function getName()
{
    return $this->attributes['name'];
}

public function setName($name)
{
    $this->attributes['name'] = $name;
}

// ---------------------------------DESCRIPTION-----------------------------------------------

public function getDescription()
{
    return $this->attributes['description'];
}

public function setDescription($description)
{
    $this->attributes['description'] = $description;
}

// --------------------------CATEGORY-------------------------------------------------

public function getCategory()
{
    return $this->attributes['category'];
}

public function setCategory($category)
{
    $this->attributes['category'] = $category;
}

// -------------------------------------BRAND---------------------------------------------
public function setBrand($brand)
{
    $this->attributes['brand'] = $brand;
}

public function getBrand()
{
    return $this->attributes['brand'];
}

// -------------------------------------GROUP---------------------------------------------
public function setGroup($group)
{
    $this->attributes['group'] = $group;
}

public function getGroup()
{
    return $this->attributes['group'];
}

// ---------------------------------PRICE--------------------------------------------------
public function getPrice()
{
    return $this->attributes['price'];
}

public function setPrice($price)
{
    $this->attributes['price'] = $price;
}

// ---------------------------------STOCK--------------------------------------------------
public function getStock()
{
    return $this->attributes['stock'];
}

public function setStock($stock)
{
    $this->attributes['stock'] = $stock;
}

// ---------------------------------COMMENTS--------------------------------------------------

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getReviews()
    {
        return $this->reviews;
    }

    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

// ---------------------------------IMAGE--------------------------------------------------
    public function getImage()
    {
        return $this->attributes['image'];
    }
    
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    } 

// -------------------------------Items-----------------------------------------------------
    public function items() 
    { 
        return $this->hasMany(Item::class); 
    } 
    
    public function getItems() 
    { 
        return $this->items; 
    } 
    
    public function setItems($items) 
    { 
        $this->items = $items; 
    }

}
