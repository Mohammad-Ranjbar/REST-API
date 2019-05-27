<?php

namespace App\Http\Resources\api\Channel;

use App\Models\Thread;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ChannelThreadsResource
 * @package App\Http\Resources\api\Channel
 * @mixin Thread
 */
class ChannelThreadsResource extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}
