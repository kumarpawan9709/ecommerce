<?php

namespace Database\Factories;

use App\Models\Productvarient;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductvarientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productvarient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
     
    public function definition()
    {
        return [
            //
            'product_id' => $this->faker->boolean(5),
            'quantity' => $this->faker->boolean(5),
             'varient_image' => $this->faker->imageUrl(),
            'unit' => $this->faker->boolean(5),
            'base_price' => $this->faker->boolean(5),
            'base_mrp' => $this->faker->boolean(5),
            'status' => $this->faker->boolean(5),
            'description' => $this->faker->name, 
        ];
    }
}
