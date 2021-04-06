<?php

namespace App\Models;

use Tears;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    use SoftDeletes;
    public $table = 'categories';
    public $fillable = ['name'];


    public function participantes()
    {
       return $this->hasMany(Tears::class, 'category_id','id');
    }
}
