<?php

namespace App\Models;

use App\Models\Essay;
use App\Models\Document;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   //a user can have many educational backgrounds
    public function educations(){
        return $this->hasMany(Education::class);
    }

    //a user can have many work experiences
    public function experiences(){
        return $this->hasMany(Experience::class);
    }

    //a user can have many documents
    public function documents(){
        return $this->hasMany(Document::class);
    }

   
}
