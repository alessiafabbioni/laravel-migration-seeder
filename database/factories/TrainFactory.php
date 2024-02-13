<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trains;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    protected $model = Train::class;

    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'departure_station' => $this->faker->city,
            'arrival_station' => $this->faker->city,
            'departure_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'arrival_time' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'train_code' => $this->faker->unique()->numerify('TR###'),
            'coach_count' => $this->faker->numberBetween(5, 15),
            'on_time' => $this->faker->boolean,
            'cancelled' => $this->faker->boolean(10), // 10% chance of being cancelled
        ];
    }
}
