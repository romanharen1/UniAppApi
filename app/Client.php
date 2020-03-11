<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Client extends Model
{
    protected $fillable = [
        'name', 'surname', 'cpf', 'birthday', 'url_image',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }
    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'user_id', 'id');
    }
}
