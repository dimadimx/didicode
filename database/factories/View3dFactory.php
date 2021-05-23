<?php

namespace Database\Factories;

use App\Models\View3d;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class View3dFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = View3d::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'playerid' => $this->faker->randomNumber(),
            'agentid' => $this->faker->randomNumber(),
            'currency' => $this->faker->currencyCode,
            'bet' => $this->faker->randomFloat(2, 0, 1000),
            'win' => $this->faker->randomFloat(2, 0, 1000),
            'rake' => $this->faker->randomFloat(2, 0, 1000),
            'tournament' => $this->faker->randomFloat(2, 0, 1000),
            'net' => $this->faker->randomFloat(2, 0, 1000),
            'fin' => $this->faker->randomFloat(2, 0, 1000),
            'aams_ticket' => Str::random(10),
            'aams_table' => Str::random(10),
        ];
    }
}
