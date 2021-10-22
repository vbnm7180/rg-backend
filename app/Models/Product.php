<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';
    protected $primaryKey='id';
    protected $fillable = [
        'id','name','price','image_path','product_category_id','description','attributes'
    ];    
    
    public $timestamps=false;
}
