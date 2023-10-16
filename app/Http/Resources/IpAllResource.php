<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IpAllResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = null;

    public function toArray($request)
    {
        return [
            'ip_id' => $this->id,
            'address' => $this->address
        ];
    }
}
