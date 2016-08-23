<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table= "categories";
	public $timestamps= false; // porque eu não criei a tabela timestamps na migration
	protected $fillable= ["name"]; 



	public function products ()
	{

		return $this-> hasmany(products::class);
	}


}
