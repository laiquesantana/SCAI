<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table= "products";
    public    $timestamps= false; // porque eu não criei a tabela timestamps na migration
    protected $fillable= ["name,description,price_cost,price_resale"]; 


    public function category()
    {

    	return  $this->BelongsTo(Category::class); // belongsto pertence á

    }


	public function brands()
    {

    	return  $this->hasmany(brand::class);

    }

    public function providers(){


    	return $this->hasmany(provider::class);  //hasmany tem varios
    }



}

