<?php

namespace Database\Seeders;

use App\Models\LookupType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LookupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LookupType::factory()->create(['name' => 'Sample Type']);
    }
}
