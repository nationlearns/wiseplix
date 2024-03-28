<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadsByPro extends Model
{
    use HasFactory; protected $table = 'leads_by_professional';
	
    protected $fillable = [ 'category_id', 'subcategory_id', 'customer_name', 'customer_email', 'mobile','alternative_number','lead_price','location_id','customer_image','added_by','created_at','updated_at'];


}
