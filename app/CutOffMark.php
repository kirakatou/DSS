<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CutOffMark extends Model
{
    protected $fillable = [
    	'department', 'module', 'submodule', 'mark'
    ];
}
