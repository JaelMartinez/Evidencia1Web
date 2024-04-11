<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', '-1 day'),
        ];
    }
}