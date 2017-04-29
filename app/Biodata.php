<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Biodata extends Model
{ 
 	protected $fillable = ['nama', 'nim', 'alamat'];
 	protected $table = 'biodata';
 	protected $primaryKey = 'id';
 	public $timestamps = false;	 
}
?>