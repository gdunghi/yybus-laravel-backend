<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Bus extends Model
{
    //
    use CrudTrait;
    protected $table = 'buses';
    protected $guarded = [];
    protected $primaryKey = 'bus_id';
    public $timestamps = false;

  
}
