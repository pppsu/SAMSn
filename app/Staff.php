<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Staff;

class Staff extends Model
{
    public $table = "staffs";
    protected $primaryKey = 'staf_id';
}
