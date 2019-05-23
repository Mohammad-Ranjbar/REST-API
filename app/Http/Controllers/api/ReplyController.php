<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\api\Reply\StoreReplyRequest;
use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
    public function store(StoreReplyRequest $request,Thread $thread)
    {
        $thread->addReply([
            'user_id' => auth()->id(),
            'body' => $request->body,
        ]);
        return [
            'status' => true,
            'message' => trans('api.thread.add_reply')
        ];
    }
}
