<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable = [
        'date','price','products','name','city','address','postcode','email','phone','delivery','user_id','status'
    ];    
    
    public $timestamps=false;
}
