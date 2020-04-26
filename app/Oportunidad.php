<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Oportunidad extends Model
{
	use SoftDeletes;
	protected $primaryKey="idOportunidad";
}
