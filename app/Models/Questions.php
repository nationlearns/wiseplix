<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Questions extends Model
{
    use HasFactory;
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'question_label',
        'category_id',
        'subcategory_id',
        'min',
        'max',
        'options',
        'type',
        'name',
        'status'
    ];

    protected $casts = [
        'options' => 'array',

    ];
    // protected function option(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => json_decode($value, true),
    //         set: fn ($value) => json_encode($value),
    //     );
    // }


    /**
     * Get all of the options for the CatForm
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    

    protected $dates = ['created_at', 'updated_at'];

    public $timestamps = false;


    public function options(): HasMany
    {
        return $this->hasMany(QuestionOptions::class, 'question_id',);
    }

    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }
    
    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
    
}
