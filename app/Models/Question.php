<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'point',
        'status'

    ];

   public function user(){
    return $this->belongsTo(User::class);
   }



   public function answers(){
    return $this->hasMany(Answer::class);
   }


   public function reports(){
    return $this->hasMany(Report::class);
   }

}