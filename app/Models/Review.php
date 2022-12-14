<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['title'] - string - contains the comment title
     * $this->attributes['score'] - int - contains the comment score
     * $this->attributes['description'] - string - contains the comment description
     * $this->attributes['acceptedReviews'] - bool - contains the comment acception
     * $this->user - User - contains the associated User
     * $this->product - Product - contains the associated Product
     */
    protected $fillable = ['title', 'score', 'description'];

    public static function validation(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'score' => 'required',
            'description' => 'required',
        ]);
    }

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

    public function getScoreArray()
    {
        $array = [0, 0, 0, 0, 0];
        $score = $this->attributes['score'];
        for ($i = 0; $i < 5; $i++) {
            if ($score > 0) {
                $array[$i] = 1;
            }
            $score -= 1;
        }

        return $array;
    }

    public function setScore($score)
    {
        $this->attributes['score'] = $score;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function getDescriptionShort()
    {
        $desc = $this->attributes['description'];
        if (strlen($desc) > 255) {
            substr($desc, 0, 255);
        }

        return $desc;
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

// --------------------------------------------------------------------------
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($pId)
    {
        $this->attributes['product_id'] = $pId;
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
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
