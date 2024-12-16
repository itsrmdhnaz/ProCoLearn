<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRole extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectRoleFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'project_role_id';
    protected $guarded = [''];
    public $incrementing = false;
    protected $keyType = 'string';
}
