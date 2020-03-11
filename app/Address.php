<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street', 'number', 'complement', 'district', 'city', 'province', 'country', 'zipcode',
    ];

    public function host()
    {
        return $this->belongsTo(Host::class, 'host_id', 'id');
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'host_id', 'id');
    }
    public function event()
    {
        return $this->belongsTo(Event::class, 'host_id', 'id');
    }
}
