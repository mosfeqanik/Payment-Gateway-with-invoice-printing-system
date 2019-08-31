<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];

    public function Invoices(){
        return $this->hasMany(invoice::class);
    }
}
