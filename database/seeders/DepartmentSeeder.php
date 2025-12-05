<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => [
                    'ar' => 'الاخبار',
                    'en' => 'news',
                ],

                'slug' => [
                    'ar' => slug('الاخبار'),
                    'en' => slug('news'),
                ],
            ],

            [
                'name' => [
                    'ar' => 'المشاريع',
                    'en' => 'Projects',
                ],
                'slug' => [
                    'ar' => slug('المشاريع'),
                    'en' => slug('Projects'),
                ],
            ],

            [
                'name' => [
                    'ar' => 'الاعلانات',
                    'en' => 'Ads',
                ],
                'slug' => [
                    'ar' => slug('الاعلانات'),
                    'en' => slug('Ads'),
                ],
            ],
            [
                'name' => [
                    'ar' => 'البروشورات',
                    'en' => 'Brochure',
                ],
                'slug' => [
                    'ar' => slug('البروشورات'),
                    'en' => slug('Brochure'),
                ],
            ],
            [
                'name' => [
                    'ar' => 'قصص نجاح',
                    'en' => 'Success Stories',
                ],
                'slug' => [
                    'ar' => slug('قصص نجاح'),
                    'en' => slug('success Stories'),
                ],
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
