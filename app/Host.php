<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    protected $fillable = [
        'company_name', 'commercial_name', 'cnpj', 'url_image',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }
    public function events()
    {
        return $this->hasMany(Event::class, 'host_id', 'id');
    }
}
