<?php

namespace App\Models;

use Category;
use State;
use Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tears extends Model
{
    use HasFactory;

    use SoftDeletes;
    public $table = 'tears';
    public $fillable = ['name','username','email','phone','address','text','state_id','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }
  
    public function comments()
    {
        return $this->hasMany(Comment::class, 'tear_id','id');
    }

    public $rules=[

    ];
}
