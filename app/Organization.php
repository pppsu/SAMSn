<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['adv_id','org_name','org_acronym','org_status','org_attribute'];


}
