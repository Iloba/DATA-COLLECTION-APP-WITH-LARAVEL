<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'essay'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
