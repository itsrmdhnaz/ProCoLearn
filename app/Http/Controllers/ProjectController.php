<?php

namespace App\Http\Controllers;

use App\Helpers\Response;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectContributtor;
use App\Models\ProjectRole;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $data['created_by'] = auth()->id();
            $data['status'] = 'not_started';
            $data['image'] = $request->file('image')->store('projects');

            $roles = json_decode($data['roles'], true);

            $project = $this->projectService->create($data);

            foreach($roles as $index => $value) {
                ProjectRole::create([
                    'project_id' => $project->project_id,
                    'role_id' => $index,
                    'number_of_people' => $value
                ]);
            }

            ProjectContributtor::create([
                'project_id' => $project->project_id,
                'user_id' => auth()->id(),
                'role_id' => $data['roleOwner'],
            ]);

            DB::commit();

            return Response::success(null, "Created Project Successfully");
        } catch (\Exception $e) {
            DB::rollBack();

            return Response::errorCatch($e, 'Something went wrong: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
