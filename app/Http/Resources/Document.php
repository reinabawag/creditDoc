<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Document extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'customer' => $this->customer->name,
            'classification' => $this->classification->description,
            'user' => $this->user->name,
            'created_at' => $this->created_at,
            'view' => '<a href="' . route('documents.show', $this->id) . '" target="_blank" rel="noopener noreferrer">View</a>',
            'update' => '<a href="' . route('documents.show', $this->id) . '" target="_blank" rel="noopener noreferrer">Update</a>',
        ];
    }
}
