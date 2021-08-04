<?php

namespace App\Repository;

use App\Http\Requests\MessageValidation;
use App\Models\Message;

interface MessageRepository
{
    public function send(MessageValidation $request);
    public function all();
    public function delete(Message $message);
}
