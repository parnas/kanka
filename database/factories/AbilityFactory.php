<?php

namespace Database\Factories;

//use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ability;

class AbilityFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ability::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entry' => '<p>' . fake()->text(500) . '<p>',
        ];
    }
}