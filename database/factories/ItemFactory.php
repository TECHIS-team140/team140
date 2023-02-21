<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id= User::first()->id;
        return [
            'user_id'=>$user_id,
            'name' => $this->faker->name(),
            'type' => 1,
            'detail' => $this->faker->realText(500),
           
            //
        ];
    }
}
