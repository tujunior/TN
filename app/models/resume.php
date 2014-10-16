<?php
class resume extends Eloquent{
	public $connection = 'mysql20'; 

    /** @var string Define table name */
    protected $table = 'user';

    /** @var boolean Turn off automatic maintaining the created_at and and updated_at columns */
    public $timestamps = false;

    /** @var array Protect primary key from modify */
    protected $guarded = array('id');

    /** @var string Define field name of primary key */
    protected $primaryKey = 'id';
}
?>