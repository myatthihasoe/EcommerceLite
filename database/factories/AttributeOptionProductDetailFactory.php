<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributeOptionProductDetail>
 */
class AttributeOptionProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_detail_id' => $this->faker->numberBetween(1, 30),
            'attribute_option_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
