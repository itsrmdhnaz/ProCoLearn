<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory, HasUuids;

    protected $primaryKey = 'project_id';
    protected $guarded = [''];
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Relasi ke tabel chats.
     */
    public function chats()
    {
        return $this->hasMany(Chat::class, 'project_id', 'project_id');
    }
}
