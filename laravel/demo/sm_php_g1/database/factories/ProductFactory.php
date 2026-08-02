<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //


            //       $table->id();
            // $table->string("name", 100);
            // $table->text("description");
            // $table->decimal("price", 8, 2);
            // $table->integer("quantity")->default(0);
            // $table->foreignId("category_id")->constrained()->onUpdate('cascade');
            // $table->timestamps();


            "name" => fake()->name(),
            "description" => fake()->text(),
            "price" => fake()->randomFloat(2, 1, 100),
            "quantity" => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
            "category_id" =>Category::inRandomOrder()->first()->id
            // "category_id" =>Category::inRandomOrder()->value('id')->first()
        ];
    }
}
