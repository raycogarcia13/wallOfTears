<?php

namespace App\Models;

use State;
use Tear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;

    use SoftDeletes;
    public $table = 'comment';
    public $fillable = ['name','email','comment','state_id','tear_id'];

    public function tear()
    {
        return $this->belongsTo(Tear::class,'tear_id','id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }

    public $rules=[

    ];
}
