<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociateProfile extends Model
{
    use HasFactory;

    protected $table = 'associate_profile';

    protected $fillable = [
'user_id','category_id','subcategory_id','full_name','profile_image','email','phone','company_name','location_id','address','about_company','area_of_service','area','other_subcat'
    ];
    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }

    public function subCategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
