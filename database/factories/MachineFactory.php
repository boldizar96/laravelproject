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
        $types = ['milling', 'welding', 'CNC'];
        $statuses=['operating','shut_down','waiting_for_repair'];
        return [
            'type' => $types[rand(0,2)],
            'status' => $statuses[rand(0,2)],

        ];
    }
}
