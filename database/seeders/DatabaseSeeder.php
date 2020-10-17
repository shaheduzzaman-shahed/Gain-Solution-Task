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
        $this->call(LogicSeeder::class);
        $this->call(OperatorSeeder::class);
        $this->call(LogicOperatorSeeder::class);
        $this->call(SegmentSeeder::class);
        $this->call(SegmentLogicSeeder::class);

        // \App\Models\User::factory(10)->create();
        \App\Models\Subscriber::factory(20)->create();
    }
}
