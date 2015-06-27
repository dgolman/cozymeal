<?php 

class Meal extends Eloquent {

    protected $table = 'meals';

    protected $guarded = array('id');
  	protected $fillable = array('title', 'description', 'price');

  	public static $rules = array(
    	'title' => 'required',
    	'description' => 'required',
    	'price' => 'required'
  	);

}