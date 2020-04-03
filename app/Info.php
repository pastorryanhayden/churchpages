<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function done()
    {
        if($this->church_name && ($this->church_url || $this->desired_url) && $this->service_times && $this->address1 && $this->city && $this->state && $this->zip && $this->phone ){
            return true;
        }
        else 
        {
            return false;
        }
    }
}
