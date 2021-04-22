<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoges extends Model
{
    protected $guarded = array("id");
    public function getDate(){
        return $this->id. ":" .$this->name."(".$this->age.")";
    }
}
