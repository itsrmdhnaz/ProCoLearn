<?php

namespace App\Services;

use App\Repositories\MessageProjectRepository;
use App\Models\MessageProject;
use Exception;

class MessageProjectService
{
    protected $messageProjectRepository;

    public function __construct(MessageProjectRepository $messageProjectRepository)
    {
        $this->messageProjectRepository = $messageProjectRepository;
    }

    public function getMessagesByProjectId(int $project_id)
    {
        try {
            return $this->messageProjectRepository->getMessagesByProjectId($project_id);
        } catch (Exception $e) {
            throw new Exception("Failed to fetch project messages: " . $e->getMessage());
        }
    }

    public function createProjectMessage(int $project_id, array $data): MessageProject
    {
        try {
            $data['project_id'] = $project_id;
            return $this->messageProjectRepository->createProjectMessage($data);
        } catch (Exception $e) {
            throw new Exception("Failed to send project message: " . $e->getMessage());
        }
    }
}
