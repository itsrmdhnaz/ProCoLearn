<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    /**
     * Create a new project.
     *
     * @param array $data
     * @return Project
     */
    public function create(array $data): Project
    {
        return Project::create($data);
    }
}
