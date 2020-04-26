<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Documento extends Model
{
	use SoftDeletes;
    protected $primaryKey="idDocumento";
}
