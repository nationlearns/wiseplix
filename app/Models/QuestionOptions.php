<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOptions extends Model
{
    use HasFactory;

    protected $table = 'questionoption';

    /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
       'question_id',
       'title',
       'val'
   ];

   protected $dates = ['created_at', 'updated_at'];

   public $timestamps = true;

   public function question(){
    return $this->belongsTo(Questions::class, 'question_id');
   }
}
