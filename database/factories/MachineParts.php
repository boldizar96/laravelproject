<?php

namespace Database\Factories;

use App\Models\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MachineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Machine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'machine_id' =>  Machine::factory(),
            'sparePart_id' => SparePart::factory()
        ];
    }
}
