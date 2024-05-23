<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use ProjectSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'lab crud standard',
            'start_date' => '2022-01-01',
            'end_date' => '2022-12-31',
            'status' => 'active'
        ]);

        Project::create([
            'name' => 'lab unit test',
            'start_date' => '2022-01-02',
            'end_date' => '2022-12-31',
            'status' => 'active'
        ]);    }
}
