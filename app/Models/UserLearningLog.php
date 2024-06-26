<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLearningLog extends Model
{
    use HasFactory;

    protected $fillable = ['education_id', 'user_id'];
}
