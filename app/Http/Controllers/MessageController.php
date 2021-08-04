<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageValidation;
use App\Models\Message;
use App\Repository\MessageRepository;
use Illuminate\Contracts\View\View;


class MessageController extends Controller
{
    private MessageRepository $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function index(): View
    {

        return view('admin.messages', ['messages' => $this->messageRepository->all()]);
    }

    public function sendMessage(MessageValidation $request): \Illuminate\Http\RedirectResponse
    {
        $this->messageRepository->send($request);
        return redirect()->back()->with('success', "Pomyślnie wysłano wiadomość");
    }
    public function deleteMessage(Message $message): \Illuminate\Http\RedirectResponse
    {
        $this->messageRepository->delete($message);
        return redirect()->back()->with('success', "Pomyślnie usunięto wiadomość");
    }
}
