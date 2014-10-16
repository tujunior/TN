<?php
class Education extends Eloquent{
	public $connection = 'mysql22'; 

    /** @var string Define table name */
    protected $table = 'Education';

    /** @var boolean Turn off automatic maintaining the created_at and and updated_at columns */
    public $timestamps = false;

    /** @var array Protect primary key from modify */
    protected $guarded = array('Level');

    /** @var string Define field name of primary key */
    protected $primaryKey = 'Level';
}
?>