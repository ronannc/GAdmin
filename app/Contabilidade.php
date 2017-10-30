<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contabilidade extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//torna o banco escreviviel
	protected $fillable = [
		'name', 'valor', 'tipo',
	];
}
