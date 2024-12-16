<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'PMO', 'guard_name' => 'web', 'icon' => 'ti ti-flag', 'colour_icon' => '#FC7A56', 'status' => 1, 'status_scope' => 'project'],
            ['name' => 'UI / UX', 'guard_name' => 'web', 'icon' => 'ti ti-brand-figma', 'colour_icon' => '#E336CC', 'status' => 1, 'status_scope' => 'project'],
            ['name' => 'FE', 'guard_name' => 'web', 'icon' => 'ti ti-brand-tailwind', 'colour_icon' => '#36B2E3', 'status' => 1, 'status_scope' => 'project'],
            ['name' => 'QA', 'guard_name' => 'web', 'icon' => 'ti ti-settings-code', 'colour_icon' => '#3C2727', 'status' => 1, 'status_scope' => 'project'],
            ['name' => 'SA', 'guard_name' => 'web', 'icon' => 'ti ti-report-analytics', 'colour_icon' => '#FF7878', 'status' => 1, 'status_scope' => 'project'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name'], 'guard_name' => $role['guard_name']],
                [
                    'icon' => $role['icon'],
                    'colour_icon' => $role['colour_icon'],
                    'status' => $role['status'],
                    'status_scope' => $role['status_scope'],
                ]
            );
        }
    }
}
