<?php

namespace App\Services;

use App\Repositories\MessageRepository;
use App\Models\Message;
use Exception;

class MessageService
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function getMessagesByName($user)
    {
        try {
            return $this->messageRepository->getMessagesByName($user);
        } catch (Exception $e) {
            throw new Exception("Failed to fetch messages: " . $e->getMessage());
        }
    }

    public function createMessage(string $receiver_id, array $data): Message
    {
        try {
            $data['sender_id'] = auth()->id();
            $data['receiver_id'] = $receiver_id;
            return $this->messageRepository->createMessage($data);
        } catch (Exception $e) {
            throw new Exception("Failed to send message: " . $e->getMessage());
        }
    }
}
