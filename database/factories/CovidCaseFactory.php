<?php

namespace Database\Factories;

use App\Models\CovidCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidCaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CovidCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'report_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cases' => rand(30, 200)
        ];
    }
}
