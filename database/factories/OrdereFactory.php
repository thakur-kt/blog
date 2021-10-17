<?php

namespace Database\Factories;

use App\Models\Ordere;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdereFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordere::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'name'=>$this->faker->name
        ];
    }
}
