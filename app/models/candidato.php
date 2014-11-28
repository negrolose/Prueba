<?php

class Candidato extends Eloquent
{
	protected $table = 'candidato';
	protected $fillable = array('nombre');
	protected $guarded  = array('id');
	public    $timestamps = false;
}