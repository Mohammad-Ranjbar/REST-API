<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\api\Channel\ChannelIndexResource;
use App\Http\Resources\api\Channel\ChannelThreadsResource;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    public function index()
    {
        $channel =Channel::paginate(5);
        return ChannelIndexResource::collection($channel);
    }

    public function threads(Channel $channel)
    {
        $threads =$channel->threads()->latest()->paginate(5);
        return ChannelThreadsResource::collection($threads);
    }
}
