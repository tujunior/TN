<?php
class Model extends Eloquent{
	protected $table="category";
	public $timestamps = false;
	protected $primarykey='id';
	protected $guarded = array('id');
}
?>