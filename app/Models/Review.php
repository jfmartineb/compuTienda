<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['title'] - string - contains the comment title
     * $this->attributes['score'] - int - contains the comment score
     * $this->attributes['description'] - string - contains the comment description
     * $this->attributes['createAt'] - DateTime - contains the comment create date
     * $this->attributes['acceptedReviews'] - bool - contains the comment acception
     * $this->user - User - contains the associated User
     * $this->product - Product - contains the associated Product
    */

    protected $fillable = ['description', 'product_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function setTitle($title)
    {
        $this->attributes['title'] = $title;
    }

    public function getScore()
    {
        return $this->attributes['score'];
    }

    public function setScore($score)
    {
        $this->attributes['score'] = $score;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description ;
    }

    public function getCreateAt()
    {
        return $this->attributes['createAt'];
    }

    public function setCreateAt($createAt)
    {
        $this->attributes['createAt'] = $createAt ;
    }

    public function getAcceptedReviews()
    {
        return $this->attributes['acceptedReviews'];
    }

    public function setAcceptedReviews($acceptedReviews)
    {
        $this->attributes['acceptedReviews'] = $acceptedReviews ;
    }
// --------------------------------------------------------------------------
    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($pId)
    {
        $this->attributes['product_id'] = $pId;
    }

    public function product(){
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

// --------------------------------------------------------------------------

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

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
