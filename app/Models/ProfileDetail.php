<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Usr;

class ProfileDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'education'
    ];

    public function user(){
        return $this->belongsTo(Usr::class);
    }
}
