<?php
namespace sysclinica\Entidades;
class Permiso extends \Eloquent {
	protected $fillable = [];
    protected $softDelete = true;
    protected $hidden = array('created_at','updated_at','deleted_at');
}