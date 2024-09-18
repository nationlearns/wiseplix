<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
class AssociateProfile extends Model
{
    use HasFactory;

    protected $table = 'associate_profile';

    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'full_name',
        'profile_image',
        'business_name',
        'email',
        'phone',
        'company_name',
        'location_id',
        'address',
        'about_company',
        'area_of_service',
        'area',
        'other_subcat'
    ];

    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }

    public function subCategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');

    }

    public function profileReview(){
        return $this->hasMany('App\Models\AssociateReview', 'associate_id');
    }

    public function getAverageRatingAttribute()
    {
        $reviews = $this->profileReview;

        if ($reviews->count() > 0) {
            return $reviews->sum('star') / $reviews->count();
        }

        return 0; // Default value if there are no reviews
    }


    public function subCategoriesArray(){
        // Since 'subcategory_id' is stored as an array, we can cast it to array and use whereIn
        $subcategoryIds = json_decode($this->subcategory_id); // Convert string to array

        return Subcategory::whereIn('id', $subcategoryIds)->get();
    }


    protected $casts = [
        // 'subcategory_id' => 'json'
    ];
}
