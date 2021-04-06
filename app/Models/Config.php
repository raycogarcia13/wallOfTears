<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    public $table = 'config';
    public $fillable = [
        'tear_moderate',
        'comment_moderate',
        'send_email_notification'
    ];
}
