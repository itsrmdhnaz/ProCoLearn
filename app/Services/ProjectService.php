<?php

namespace App\Services;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\DB;
use Exception;

class ProjectService
{
    protected ProjectRepository $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle project creation with roles as JSON.
     *
     * @param array $data
     * @return array
     */
    public function create(array $data): Project
    {
        return $this->repository->create($data);
    }
}
