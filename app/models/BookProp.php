<?php
// this class is created for use in hasManyThrough
class BookProp extends Eloquent{
protected $table = 'book_pro';

	public $timestamps = false;
	protected $primaryKey ='bpid';
	protected $guarded = array('bpid');



	
}



?>