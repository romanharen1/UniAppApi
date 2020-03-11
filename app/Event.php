<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'description', 'url_image', 'startDate', 'endDate', 'price', 'status', 'music_style'
    ];
    protected $dates = [
        'deleted_at'
    ];

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'event_id', 'id');
    }

    public function host()
    {
        return $this->belongsTo(Host::class, 'host_id', 'id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'host_id', 'id');
    }
}
