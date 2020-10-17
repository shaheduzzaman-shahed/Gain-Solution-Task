<?php

namespace Database\Seeders;

use App\Models\Logic;
use Illuminate\Database\Seeder;

class LogicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logic::create([
           'name' => 'first_name',
           'type' => 'text',
           'value' => 'First Name',
        ]);
        Logic::create([
           'name' => 'last_name',
           'type' => 'text',
           'value' => 'Last Name',
        ]);
        Logic::create([
           'name' => 'email',
           'type' => 'text',
           'value' => 'Email',
        ]);
        Logic::create([
           'name' => 'created_at',
           'type' => 'date',
           'value' => 'Created At',
        ]);
        Logic::create([
           'name' => 'birth_day',
           'type' => 'date',
           'value' => 'Birthday',
        ]);
    }
}
