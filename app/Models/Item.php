<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the item primary key (id)
     * $this->attributes['totalPrice'] - int - contains the item total value
     * $this->attributes['quantity'] - int - contains the item product quantity
     * $this->attributes['order'] - Order - contains the order that owns the item
     * $this->attributes['Product'] - Product - contains the Product that is in the item
     * $this->attributes['created_at'] - DateTime - contains the time the product was created
     * $this->attributes['updated_at'] - DateTime - contains the time the product was last updated
     */
    protected $fillable = ['name', 'price'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTotalPrice()
    {
        return $this->attributes['totalPrice'];
    }

    public function setTotalPrice($totalPrice)
    {
        $this->attributes['totalPrice'] = $totalPrice;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getCreated_at()
    {
        return $this->attributes['created_at'];
    }

    public function setCreated_at($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdated_at()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdated_at($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }

    //--------------------------------------------------------
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    //--------------------------------------------------------
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }
}
