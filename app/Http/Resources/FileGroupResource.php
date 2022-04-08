<?php

namespace App\Http\Resources;

use App\Models\employee;
use Illuminate\Http\Resources\Json\JsonResource;

class FileGroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   $employee = $this->whenLoaded(relationship: 'employee');
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}