<?php

namespace Database\Seeders;

use App\Models\SponsershipType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => [
                    'ar' => 'كفالة يتيم',
                    'en' => 'Orphan Sponsership',
                ],
            ],

            [
                'name' => [
                    'ar' => 'كفالة عائلة فقيرة',
                    'en' => 'Poor Family Sponsership',
                ],
            ],
        ];

        foreach ($types as $type) {
            SponsershipType::create($type);
        }
    }
}
