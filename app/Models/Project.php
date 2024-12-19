<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'project_id';
    protected $guarded = [''];
    public $incrementing = false;
    protected $keyType = 'string';

    public function rolesNeeded(): HasMany
    {
        return $this->hasMany(ProjectRole::class, 'project_id', 'project_id');
    }

    public function contributors(): HasMany
    {
        return $this->hasMany(ProjectContributtor::class, 'project_id', 'project_id');
    }
}
