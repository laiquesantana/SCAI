<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    


	protected $table= "providers";
    public $timestamps= false; // porque eu não criei a tabela timestamps na migration
    protected $filable= ["name"]; 


	public function products ()
	{

		return $this-> hasmany(products::class);
	}

   public function brands()
    {

    	return  $this->hasMany(brands::class);

    }
}
