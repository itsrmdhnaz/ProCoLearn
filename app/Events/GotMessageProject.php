<?php

namespace App\Events;

use App\Models\MessageProject;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GotMessageProject implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public MessageProject $messageProject) {
        //
    }

    public function broadcastOn() {
        return new PrivateChannel("chat-project.{$this->messageProject->project_id}");
    }
}
