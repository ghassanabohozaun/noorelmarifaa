<?php

namespace Database\Seeders;

use App\Models\Website_main_page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class websietMainPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Website_main_page::create([
            'counter_one' => '1500',
            'counter_two' => '15000',
            'counter_three' => '1000',
            'counter_four' => '10',
            'upload_video' => 'https://www.youtube.com/watch?v=Mi0tvjLZhJw',
        ]);
    }
}
