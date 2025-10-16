<?php

namespace Database\Seeders;

use App\Models\SponsershipOrganization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsershipOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            [
                'name' => [
                    'ar' => 'اسلامك ميشن',
                    'en' => 'UK Islamic Mission',
                ],
            ],

            [
                'name' => [
                    'ar' => 'مؤسسة رقم 2',
                    'en' => 'Organization 2',
                ],
            ],

            [
                'name' => [
                    'ar' => 'مؤسسة رقم 3',
                    'en' => 'Organization 3',
                ],
            ],
        ];

        foreach ($organizations as $organization) {
            SponsershipOrganization::create($organization);
        }
    }
}
