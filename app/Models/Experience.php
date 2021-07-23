<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'position',
        'field',
        'employer',
        'start_date',
        'end_date',
        'experience',
    ];
}
