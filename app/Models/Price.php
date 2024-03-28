<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    protected $fillable = ['category_id', 'subcategory_id','points','created_at','updated_at'];

    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
