<?php

namespace App\Http\Resources\api\Channel;

use App\Models\Channel;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ChannelIndexResource
 * @package App\Http\Resources\api\Channel
 * @mixin Channel
 */
class ChannelIndexResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug
        ];
    }
}
