<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */


    ################## to create resource file use command php artisan make:resource the name  #######################
    ################## the resource file is used for customization and changeing the names of properties in database and uniform data format for all api #######################

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
        ];
    }
}
