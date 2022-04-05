<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommissionMedium extends Model
{
    protected $guarded = [];
    public function confirms() {
        return $this->morphMany('App/Confirm' , 'confirmable');
    }
}
