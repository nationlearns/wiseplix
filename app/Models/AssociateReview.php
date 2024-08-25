<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociateReview extends Model
{
    use HasFactory;

    protected $table = 'associate_reviews';

    protected $fillable = [
        'associate_id',
        'user_id',
        'star',
        'review'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
