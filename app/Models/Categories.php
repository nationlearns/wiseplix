<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';  

    protected $fillable = [
        'title','icon','slug','featured','status', 'position', 'cat_image','maincat_id', 'status', 'top_cat_id', 'alt_name'
    ]; 

    public function subcategory()
    {
    	return $this->hasMany('App\SubCategory','category_id');
    }
}
