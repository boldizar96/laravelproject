<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\Maintenance;
use App\Models\SparePart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maintenance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'machine_id' => SparePart::factory()->create(),
            'sparePart_id' =>Machine::factory()->create(),
            'repairMan_id' =>User::factory()->create(),
            'repair_date' => $this->faker->date(),
            'duration(mins)' =>$this->faker->randomNumber()
        ];
    }
}
