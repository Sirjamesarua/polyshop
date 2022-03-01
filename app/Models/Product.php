<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    public $primaryKey='id';
    //public $foreignKey='seller_id';

    public function user(){
    	return $this->belongTo('App\Models\User');
    }
}
