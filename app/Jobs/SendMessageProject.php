<?php

namespace App\Jobs;

use App\Events\GotMessageProject;
use App\Models\MessageProject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessageProject implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public MessageProject $messageProject) {
        //
    }

    public function handle(): void {
        GotMessageProject::dispatch($this->messageProject);
    }
}
