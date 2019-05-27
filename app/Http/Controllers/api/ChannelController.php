<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\api\Channel\ChannelIndexResource;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    public function index()
    {
        $channel =Channel::get();
        return ChannelIndexResource::collection($channel);

    }
}