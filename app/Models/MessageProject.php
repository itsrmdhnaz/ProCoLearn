<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageProject extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'message_projects';
    protected $primaryKey = 'message_project_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'message_project_id',
        'project_id',
        'message',
        'read_by',
    ];

    // Relasi ke Proyek
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    // Accessor untuk daftar pengguna yang sudah membaca
    public function getReadByAttribute($value)
    {
        return json_decode($value, true);
    }

    // Mutator untuk menyimpan data `read_by`
    public function setReadByAttribute($value)
    {
        $this->attributes['read_by'] = json_encode($value);
    }
}
