<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Usr;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price'
    ];

    public function user(){
        return $this->belongsTo(Usr::class);
    }

    //untuk membuat acessor di perlukan get{namaFucntion}Attribute
    public function getPriceFormattedAttribute(){
        return formatRupiah($this->price);
    }
}
