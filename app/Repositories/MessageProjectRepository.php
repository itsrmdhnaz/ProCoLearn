<?php

namespace App\Repositories;

use App\Models\MessageProject;

class MessageProjectRepository
{
    /**
     * Ambil pesan proyek berdasarkan project_id,
     * di-group berdasarkan tanggal, dan diurutkan berdasarkan created_at ASC.
     */
    public function getMessagesByProjectId(int $project_id)
    {
        return MessageProject::where('project_id', $project_id)
            ->orderBy('created_at', 'asc')
            ->get()
            ->groupBy(function ($message) {
                return $message->created_at->startOfDay()->format('Y-m-d'); // Group by tanggal
            })
            ->values(); // Ubah hasil groupBy menjadi array indexed biasa
    }

    /**
     * Simpan pesan proyek baru.
     */
    public function createProjectMessage(array $data): MessageProject
    {
        return MessageProject::create($data);
    }
}
