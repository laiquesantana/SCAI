<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

	protected $table= "brands";
	public $timestamps= false; // porque eu não criei a tabela timestamps na migration
	protected $fillable= ["name"]; 



	public function products ()
	{

		return $this-> hasmany(products::class);
	}


}
