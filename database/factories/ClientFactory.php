<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'fiscal_data' => $this->faker->sentence(),
            'delivery_address' => $this->faker->streetAddress(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', '-1 day'),
        ];
    }
}