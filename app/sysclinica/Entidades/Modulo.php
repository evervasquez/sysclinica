<?php
namespace sysclinica\Entidades;
class Modulo extends \Eloquent {
	protected $fillable = [];
    protected $softDelete = true;
    protected $hidden = array('created_at','updated_at','deleted_at');
}