<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Host extends JsonResource
{
    private $id;
    private $company_name;
    private $commercial_name;
    private $cnpj;
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
            'company_name' => $this->company_name,
            'commercial_name' => $this->commercial_name,
            'cnpj' => $this->cnpj,
            'url_image' => $this->url_image
        ];
    }
}
