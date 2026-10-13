<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::updateOrCreate(
            ['slug' => 'bengkulu-satu-data'],
            [
                'title' => 'Bengkulu Satu Data',
                'category' => 'Web Development',
                'summary' => 'Platform integrasi dan akses data.',
                'description' => 'Pengembangan platform berbasis CKAN.',
                'role' => 'Web Developer',
                'project_year' => 2026,
                'featured' => true,
                'published' => true,
            ]
        );

        Project::updateOrCreate(
            ['slug' => 'smart-irrigation'],
            [
                'title' => 'Smart Irrigation System',
                'category' => 'IoT',
                'summary' => 'Sistem penyiraman berbasis sensor kelembapan.',
                'description' => 'Proyek IoT untuk mengotomatisasi penyiraman.',
                'role' => 'IoT Developer',
                'project_year' => 2025,
                'featured' => true,
                'published' => true,
            ]
        );
    }
}