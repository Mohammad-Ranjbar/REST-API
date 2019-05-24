<?php

namespace App\Http\Resources\api\Reply;

use App\Models\Reply;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ShowReplyResource
 * @package App\Http\Resources\api\Reply
 * @mixin Reply
 */
class ShowReplyResource extends JsonResource
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
            'user_id' => $this->user_id,
            'body' => $this->body,


        ];
    }
}
