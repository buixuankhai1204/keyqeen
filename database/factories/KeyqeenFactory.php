<?php

namespace Database\Factories;

use App\Models\keyqeen;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class KeyqeenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = keyqeen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'=>User::factory()->create(),
            'body'=>$this->faker->sentence(),
        ];
    }
}
