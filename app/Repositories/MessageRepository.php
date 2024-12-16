<?php

namespace App\Repositories;

use App\Models\Message;

class MessageRepository
{
    /**
     * Ambil pesan berdasarkan nama, di-group berdasarkan tanggal
     * dan diurutkan berdasarkan created_at ASC.
     */
    public function getMessagesByName($user)
    {
        return Message::with('receiver')->where(function ($query) {
            $query->where('receiver_id', auth()->id())
                ->orWhere('sender_id', auth()->id());
        })
            ->orWhere(function ($query) use ($user) {
                $query->where('sender_id', $user->receiver_id)
                    ->orWhere('receiver_id', $user->receiver_id);
            })
            ->orderBy('created_at', 'asc')
            ->get()
            ->groupBy('group_by_date') // Gunakan accessor groupByDate di model
            ->values(); // Ubah hasil groupBy menjadi array indexed biasa
    }

    /**
     * Simpan pesan baru.
     */
    public function createMessage(array $data): Message
    {
        $message = Message::create($data);
        $message->load('receiver');
        return $message;
    }
}
