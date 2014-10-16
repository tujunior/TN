<?php

class ResumeTest extends Eloquent{

 	public $connection = 'mysql22'; 

    /** @var string Define table name */
    protected $table = 'Resume';

    /** @var boolean Turn off automatic maintaining the created_at and and updated_at columns */
    public $timestamps = false;

    /** @var array Protect primary key from modify */
    protected $guarded = array('RunningNumber');

    /** @var string Define field name of primary key */
    protected $primaryKey = 'RunningNumber';

   // protected $attributes = array('MyDate'=>'3334');
    
    protected $appends = array('MyDate');
   //  public function getUrlAttribute() {
   //      $url = "/product/";
   //      return $url;
   //  }
     public static function boot() {

        parent::boot();

        parent::observe(new ResumeObserver());
    }
    public function Education(){
    	return $this->belongsTo('Education');
    }

    public function setMyDateAttribute()
    {
        // $this->attributes['MyDate']='ok';
    } public function getMyDateAttribute()
    {
        return 'okk';
        //$this->attributes['MyDate']='ok';
    }

   
	
}
?>