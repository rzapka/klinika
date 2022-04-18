<?php

namespace App\Repository\Message;

use App\Http\Requests\MessageValidation;
use App\Models\Message;
use Carbon\Carbon;

class MessageRepository implements \App\Repository\MessageRepository
{
    public function send(MessageValidation $request)
    {
        $data = $request->validated();
        $message = new \App\Models\Message([
            'firstname' => trim($data['firstname']) ?? '',
            'lastname' => trim($data['lastname']) ?? '',
            'email' => trim($data['email']) ?? '',
            'topic' => trim($data['topic']) ?? '',
            'description' => trim($data['description']) ?? '',
            'post_date' => Carbon::now(),
        ]);
        $message->save();
    }

    public function all()
    {
        return Message::query()->orderBy('post_date', 'desc')->get();
    }

    public function delete(Message $message)
    {
        $message->delete();
    }
}
