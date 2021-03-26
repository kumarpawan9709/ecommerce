<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_name' => $this->faker->name,
            'img_path' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean(5),
            'cat_id' => $this->faker->boolean(5),
        ];
    }
}
