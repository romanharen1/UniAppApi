<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'owner', 'event_name', 'status', 'event_date'
    ];
    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(Client::class, 'user_id', 'id');
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
