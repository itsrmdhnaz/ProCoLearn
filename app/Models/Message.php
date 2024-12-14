<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'messages';
    protected $primaryKey = 'message_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [
        ''
    ];

    protected $appends = ['time', 'groupByDate'];

    // Relasi ke User sebagai Pengirim
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'user_id');
    }

    // Relasi ke User sebagai Penerima
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id', 'user_id');
    }

    // Accessor untuk format tanggal (Today, Yesterday, atau Tanggal Lain)
    public function getGroupByDateAttribute()
    {
        $createdDate = $this->created_at->startOfDay();
        $today = now()->startOfDay();
        $yesterday = now()->subDay()->startOfDay();

        if ($createdDate->equalTo($today)) {
            return 'Today';
        } elseif ($createdDate->equalTo($yesterday)) {
            return 'Yesterday';
        } else {
            return $createdDate->format('Y-m-d');
        }
    }

    // Accessor untuk format waktu
    public function getTimeAttribute()
    {
        return $this->created_at->format('H:i');
    }

    // Accessor untuk cek apakah pesan sebelumnya memiliki waktu yang sama
    public function getIsSameTimeBeforeMessageAttribute()
    {
        $previousMessage = Message::where('sender_id', $this->sender_id)
            ->where('created_at', '<', $this->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        // Check if the previous message exists and has the same time
        if ($previousMessage && $previousMessage->created_at->format('H:i') == $this->created_at->format('H:i')) {
            return true;
        }

        return false;
    }


    // Accessor untuk cek apakah pesan sebelumnya memiliki grup tanggal yang sama
    public function getIsSameGroupDateBeforeMessageAttribute()
    {
        $previousMessage = Message::where('sender_id', $this->sender_id)
            ->where('created_at', '<', $this->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        // Memeriksa apakah pesan sebelumnya ada dan memiliki grup tanggal yang sama
        if ($previousMessage && $previousMessage->groupByDate == $this->groupByDate) {
            return true;
        }

        return false;
    }
}
