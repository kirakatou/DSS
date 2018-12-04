<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 
    	"no_pendaftaran", "nama", "batch", "usm", "department", "submodule", "mate_10",  "inggris_10", "first_module_10", "second_module_10", 
    	"third_module_10", "mate_11", "inggris_11",  "first_module_11", "second_module_11", "third_module_11", "mate_12", "inggris_12", 
    	"first_module_12", "second_module_12", "third_module_12", "mate_13", "inggris_13", "first_module_13", "second_module_13", 
    	"third_module_13", "usm_mate", "usm_inggris", "usm_tpa"
	]; 
}
