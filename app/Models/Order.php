<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Item;

class Order extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['totalPrice'] - int - contains the order toal value
     * $this->attributes['active'] - boolean - contains if the order is still active
     * $this->attributes['items'] - Item [] - contains the order items
     * $this->attributes['user'] - User - get the user that owns the order
     * $this->attributes['created_at'] - DateTime - contains the time the product was created
     * $this->attributes['updated_at'] - DateTime - contains the time the product was last updated
    */

    protected $fillable = ['name','price'];

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

    public function getActive()
    {
        return $this->attributes['active'];
    }

    public function setActive($active)
    {
        $this->attributes['active'] = $active;
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

    // -------------------------------------------------------
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

    //----------------------------------------------------
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

}