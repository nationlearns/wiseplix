<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

    protected $table = 'leads';
	
    protected $fillable = ['user_id', 'category_id', 'subcategory_id', 'answers', 'name', 'email','mobile','gender','pin_code','lead_status','status','added_by','created_at','updated_at','district','state', 'location_id'];


}
