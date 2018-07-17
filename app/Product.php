<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ['code','name','desc','additional_info','brand','stock','price'];

    public static $rules = [
        // Validation rules
        "code" => "required",
        "name" => "required",
        "desc" => "required",
        "brand" => "required",
        "stock" => "required",
        "price" => "required"
    ];

    protected $table = 'product';

    // Relationships

}
