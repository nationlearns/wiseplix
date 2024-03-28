<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'businesses';

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'email',
        'mobile',
        'owner_name',
        'business_name',
        'business_description',
        'alternate_number',
        'landline',
        'location_id',
        'address',
        'company_type',
        'website',
        'establish_date',
        'area_of_service',
        'banner_image',
        'profile_image',
        'updated_at',
    ];
}
