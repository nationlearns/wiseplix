<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseLeadDetails;

class Leads extends Model
{
    use HasFactory;

    protected $table = 'leads';
	
    protected $fillable = ['user_id', 'category_id', 'subcategory_id', 'answers', 'name', 'email','mobile','gender','pin_code','lead_status','status','added_by','created_at','updated_at','district_name','state', 'location_id', 'area_name'];

    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function getPurchaseDetails(){
        return $this->hasMany(PurchaseLeadDetails::class, 'lead_id');
    }
}
