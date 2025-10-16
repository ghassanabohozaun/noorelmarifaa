<?php

namespace Database\Seeders;

use App\Models\SponsershipStatus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsershipStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => [
                    'ar' => 'كفالة متوقفة',
                    'en' => 'Stop Sponsership',
                ],
            ],

            [
                'name' => [
                    'ar' => 'كفالة مستمرة',
                    'en' => 'Continues Sponsership',
                ],
            ],

            [
                'name' => [
                    'ar' => 'غير مكفول',
                    'en' => 'Not Sponsership',
                ],
            ],

            [
                'name' => [
                    'ar' => 'في انتظار الكفالة ',
                    'en' => 'Pending Sponsership',
                ],
            ],
        ];

        foreach ($statuses as $status) {
            SponsershipStatus::create($status);
        }
    }
}
