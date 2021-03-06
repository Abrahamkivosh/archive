<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->imageUrl(),
            "type" =>$this->faker->randomElement(["image","document","video"]),
            "description"=>$this->faker->realText(100,2),
            "user_id"=>function(){ return User::all()->random(); },
            "group_id"=>function(){ return User::all()->random(); },
            
        ];
    }
}
