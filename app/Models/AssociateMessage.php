<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AssociateMessage extends Model
{
    use HasFactory;

    protected $table = 'associate_messages';

    protected $fillable = [
        'user_id',
        'associate_id',
        'message',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
