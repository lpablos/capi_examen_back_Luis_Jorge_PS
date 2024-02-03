<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\UserDomicilio;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = UserDomicilio::class;

    
    public function definition(): array
    {
        return [
            //
            'user_id'=> User::factory()->create()->id,
            'domicilio'=> $this->faker->streetAddress,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->word,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city
        ];
    }
}
