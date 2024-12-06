<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DayChart extends Component
{
    public $colors;
    public $totalBars = 12;

    public function __construct($colors = [['color' => 'bg-orange-500']] )
    {
        // Tambahkan weight default = 1 jika tidak ada
        $colors = array_map(function($item) {
            if (!isset($item['weight'])) {
                $item['weight'] = 1;
            }
            return $item;
        }, $colors);

        $this->colors = $this->calculateDistribution($colors);
    }

    private function calculateDistribution($colors)
    {
        $distribution = [];
        $usedBars = 0;

        // Tambahkan transparent untuk sisa bars di awal
        $remainingBars = $this->totalBars;
        foreach ($colors as $colorData) {
            $remainingBars -= $colorData['weight'];
        }
        if ($remainingBars > 0) {
            $distribution[] = [
                'color' => 'bg-transparent',
                'bars' => $remainingBars
            ];
        }

        // Proses warna yang diberikan sesuai bobot
        foreach ($colors as $colorData) {
            $bars = $colorData['weight'];
            $usedBars += $bars;

            if ($usedBars > $this->totalBars) {
                $bars = $bars - ($usedBars - $this->totalBars);
                $usedBars = $this->totalBars;
            }

            if ($bars > 0) {
                $distribution[] = [
                    'color' => $colorData['color'],
                    'bars' => $bars
                ];
            }

            // Jika sudah mencapai total bars, hentikan
            if ($usedBars >= $this->totalBars) {
                break;
            }
        }

        return $distribution;
    }

    public function render(): View|Closure|string
    {
        return view('components.day-chart');
    }
}
