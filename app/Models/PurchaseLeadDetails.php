<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseLeadDetails extends Model
{
    // use HasFactory;
    protected $table = 'purchage_lead_details';
    protected $fillable = ['lead_id','user_id','created_at','updated_at'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
