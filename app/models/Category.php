<?php
class Category extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';
	public $timestamps = false;
	protected $primaryKey='id';

	// ------ Don't forget defind using array--------
	 protected $guarded = array('id');
	 protected $fillable = array('cate_name','cate_detail');

	 /// When Create Function ---> prename = "scope"----- Can call name without scope 
	 public function scopeID($query)
    {
        return $query->where('parent_id',0);
    }
    public function scopeName($query){
        return $query->where('cate_name','Book');
    }



// ***********************  Relationship  *************************
	//------- One To One ----------------------------------------------
	//--- 1 Category have many book ----------------------------------------
	    // public function Book(){
	    // 	return $this->hasOne('Book','cate_id','book_id');   // hasOne('relative class','forient_key','local_key')
	    // }

//------- One To Many ----------------------------------------------
	//--- 1 Category have many book ----------------------------------------
	    // public function Book(){
	    // 	return $this->hasMany('Book','cate_id');
	    // }


//--------- Many to Many-------------------------------------------

    // public function Properties(){
    // 	return $this ->belongsToMany('Properties','prop_cate','id','prop_id');
    // }

 // ----------- has many through--------------------------------------------

	    // public function Properties(){
	    // 	return $this->hasManyThrough('BookProp','Book','cate_id','book_id');    
	    // 	// hasManyThrough('lastTable,'2nd Table','id_of_category in Book table','id_of_book in book properties')
	    // }

    // public function Book(){
    // 	return $this->hasMany('Book','cate_id');
    // }
    
    // public function Prop(){
    // 	return $this->belongsToMany('Properties','prop_cate','id','prop_id');
    // }

}
