<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    private $id;
    private $name;
    private $surname;
    private $cpf;
    private $birthday;
    private $url_image;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname,
            'cpf' => $this->cpf,
            'birthday' => $this->birthday,
            'url_image' => $this->url_image
        ];
    }
}
