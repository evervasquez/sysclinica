<?php
namespace sysclinica\Entidades;
class Servicio extends \Eloquent {
	protected $fillable = [];
    protected $softDelete = true;
    protected $hidden = array('created_at','updated_at','deleted_at');
}