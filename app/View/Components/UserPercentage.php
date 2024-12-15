<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserPercentage extends Component
{
    public $role;
    public $colors;

    public function __construct($role)
    {
        $this->role = collect($role);
        $this->colors = [
            'PMO' => 'bg-orange-400',
            'UI/UX' => 'bg-blue-500',
            'FE' => 'bg-white',
            'BE' => 'bg-green-400',
            'QA' => 'bg-red-400',
            'DevOps' => 'bg-yellow-400'
        ];
    }

    public function total()
    {
        return $this->role->sum('count');
    }

    public function calculatePercentage($count)
    {
        return round(($count / $this->total()) * 100, 1);
    }

    public function render(): View|Closure|string
    {
        return view('components.user-percentage');
    }
}
