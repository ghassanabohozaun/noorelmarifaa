<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' =>[
                'ar'=> fake()->firstName(),
                'en'=> fake()->firstName(),
            ],
            'father_name'   =>[
                'ar'=> fake()->firstName(),
                'en'=> fake()->firstName(),
            ],
            'grand_father_name'   =>[
                'ar'=> fake()->firstName(),
                'en'=> fake()->firstName(),
            ],
            'family_name'  =>[
                'ar'=> fake()->lastName(),
                'en'=> fake()->lastName(),
            ],
            'personal_id' => fake()->numberBetween(1,60000),
            'birthday'=>fake()->date(),
            'classification'=>'fatherless',
            'gender'=>'male',
            'class'=>'1',
            'health_status'=>'good',
            'disease_clarification'=>'',
            // 'governoate_id'=>'1',
            // 'city_id'=>'1',
            // 'address_details'=>'',
            // 'child_family_id'=>'1',
            // 'child_father_id'=>'1',
            // 'child_mother_id'=>'1',
            // 'child_guardian_id'=>'1',
            // 'child_file_id'=>'1',
            'authorized_contact_number' => fake()->phoneNumber(),
            'backup_contact_number' => fake()->phoneNumber(),
            'whatsApp_number' => fake()->phoneNumber(),
            'status' => '1',
            'freeze' => '0',
        ];
    }
}
