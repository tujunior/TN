<?php
class Book extends Eloquent{
protected $table = 'book';
	
	public $timestamps = false;
	protected $primarykey='id';
	protected $guarded = array('id');

	// ***********************  Relationship  *************************
	//------- One To One ----------------------------------------------
	//--- 1 book has 1 Category----------------------------------------
		public function Cate(){
			return $this->belongsTo('Category');
		}

	// Reverse abrove 
	//------- One To Many ----------------------------------------------
	//--- 1 book has 1 Category----------------------------------------

		// public function Cate(){
		// 	return $this->belongsTo('Category','cate_id');
		// }


	
}



?>