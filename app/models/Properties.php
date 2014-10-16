<?php
class Properties extends Eloquent{
protected $table = 'properties';

	public $timestamps = false;
	protected $primaryKey ='prop_id';
	protected $guarded = array('prop_id');

	// public function Cate(){
	// 	return $this->belongsToMany('Category','prop_cate','prop_id','id');
	// }

		//------- Many To Many ----------------------------------------------
	//--- many Category have many Properties ----------------------------------------
		public function Cate(){
			return $this->belongsToMany('Category','prop_cate','prop_id','id');

		}
}



?>