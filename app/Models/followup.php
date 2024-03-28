<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followup extends Model
{
    protected $table = 'followups';

    protected $fillable = [ 'user_id', 'lead_id', 'category_id','subcategory_id', 'fdate', 'ftime', 'fnote', 'convert_status', 'convert_comment','fcdate','history'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function lead()
    {
    	return $this->belongsTo('App\Models\Lead','lead_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Categories','category_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory','subcategory_id','id');
    }
}
