<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectContributtor extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectContributtorFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'project_contributtor_id';
    protected $guarded = [''];
    public $incrementing = false;
    protected $keyType = 'string';
}
