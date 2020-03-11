<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
{
    private $id;
    private $name;
    private $description;
    private $startDate;
    private $endDate;
    private $price;
    private $status;
    private $music_style;

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
            'description' => $this->description,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'price' => $this->price,
            'status' => $this->status,
            'music_style' => $this->music_style
        ];
    }
}
