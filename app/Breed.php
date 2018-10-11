<?php
namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
	public $timestamp = false;
	public function cats(){
		return $this -> hasMany('Furbook\Cat');
	}
}