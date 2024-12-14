<?php

namespace App\Http\Controllers;

use App\Helpers\Response;
use App\Jobs\SendMessage;
use App\Jobs\SendMessageProject;
use App\Models\User;
use App\Services\MessageService;
use App\Services\MessageProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class MessageController extends Controller
{
    protected $messageService;
    protected $messageProjectService;

    public function __construct(MessageService $messageService, MessageProjectService $messageProjectService)
    {
        $this->messageService = $messageService;
        $this->messageProjectService = $messageProjectService;
    }

    // Messages
    public function getMessages(User $user)
    {
        try {
            $messages = $this->messageService->getMessagesByName($user);
            return Response::success($messages);
        } catch (Exception $e) {
            return Response::errorCatch($e);
        }
    }

    public function sendMessage(Request $request,User $user)
    {
        $data = $request->validate([
            'message' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $message = $this->messageService->createMessage($user->user_id, $data);

            SendMessage::dispatch($message);

            DB::commit();
            return Response::success($message);
        } catch (Exception $e) {
            DB::rollBack();
            return Response::errorCatch($e);
        }
    }

    // Message Projects
    public function getProjectMessages($project_id)
    {
        try {
            $projectMessages = $this->messageProjectService->getMessagesByProjectId($project_id);
            return response()->json(['success' => true, 'data' => $projectMessages]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }

    public function sendProjectMessage(Request $request, $project_id)
    {
        $data = $request->validate([
            'message' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $messageProject = $this->messageProjectService->createProjectMessage($project_id, $data);

            // Dispatch Job
            SendMessageProject::dispatch($messageProject);

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Project message sent successfully']);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
