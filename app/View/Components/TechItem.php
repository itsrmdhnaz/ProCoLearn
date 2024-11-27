<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TechItem extends Component
{
    public string $tech;
    public string $color;

    /**
     * Create a new component instance.
     */
    public function __construct(string $tech)
    {
        $this->tech = $tech;
        $this->color = $this->getColor($tech);
    }

    /**
     * Get color based on technology.
     */
    private function getColor(string $tech): string
    {
        return match (strtolower($tech)) {
            'kotlin' => 'orange-500',
            'flutter' => 'black',
            'java' => 'purple-950',
            'javascript', 'js' => 'white',
            default => 'gray-400'
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tech-item');
    }
}