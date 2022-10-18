<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
         'roepnaam' => $this->faker->firstName,
         'voorvoegsel' => $this->faker->title,
         'achternaam' => $this->faker->lastName,
         'voorletters' => $this->faker->suffix,
         'officielenaam' => $this->faker->name,
         'postcode' => $this->faker->postcode,
         'straat' => $this->faker->streetName,
         'huisnummer' => $this->faker->buildingNumber,
         'woonplaats' => $this->faker->cityPrefix,
        ];
    }
}
