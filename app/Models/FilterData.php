<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterData extends Model
{
    use HasFactory;

    protected $table = 'filter_data';
    protected $fillable = ['filter_pincode', 'filter_category_id', 'filter_sub_category_id', 'filter_state', 'filter_district', 'created_by'];
}
