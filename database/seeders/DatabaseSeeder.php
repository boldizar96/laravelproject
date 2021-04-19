<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Machine::factory(10)->create()->each(function($m){
            $m->SpareParts()->save( \App\Models\SparePart::factory(10)->create()
            ->each()(function($s){
                $s->Stock()->save(\App\Models\Stock::factory()->create);
            })
        );
        });
        //\App\Models\SparePart::factory(10)->create();

    }
}
