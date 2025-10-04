<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\ProfileDetail as Profile;
use App\Models\Product as Prod;
use App\Models\Eskul as Eskul;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function profileDetail(){
        return $this-> hasOne(Profile::class);
    }

    public function products(){
        return $this->hasMany(Prod::class);
    }

    public function eskuls(){
        return $this->belongsToMany(Eskul::class, 'user_eskul', 'user_id','eskul_id');
    }


    public function getFormattedNameAttribute(){
        return 'Mr. ' . $this->name;
        
    }

    public function setNameAttribute($value){

      $this->attributes['name'] = strtoupper($value);

    }

      public function scopeActive($query){
        return $query->where('is_active', true);
    }
}
