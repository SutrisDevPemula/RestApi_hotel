<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HotelsResource extends ResourceCollection
{
    
    public function toArray($request)
    {
        return [
            "status" => "success",
            "message" => "api dian hotel",
            "data" => parent::toArray($request)
        ];
    }
}
