<?php

namespace Database\Factories;

use App\Models\SparePart;
use Illuminate\Database\Eloquent\Factories\Factory;

class SparePartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SparePart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['arm', 'wrist', 'body'];
        $statuses=['assembled','waiting_for_assembly','assembly_in_progress'];
        return [
            'name' => $this->faker->userName ,
            'type' => $types[rand(0,2)],
            'status' => $statuses[rand(0,2)]
        ];
    }
}
