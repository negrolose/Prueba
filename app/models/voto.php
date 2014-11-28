<?php

class Voto extends Eloquent
{
	protected $table = 'voto';
	protected $fillable = array('candidato_id');
	protected $guarded  = array('id');
	public    $timestamps = false;
}