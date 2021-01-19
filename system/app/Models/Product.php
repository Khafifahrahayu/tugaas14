<?php 

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Support\Str;

class Product extends Model{

	use ProdukAttributes, ProdukRelations;
	
	protected $table = 'product';
	protected $primaryKey 'uuid';
	peblic $incrementing = false;
	protected $casts= [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'
 
	];

	protected static function boot(){
		parent::boot();

		static::creating(function(sistem){
			$item->uuid = (string) Str::uuid();

		});
	}
}