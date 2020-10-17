<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operator::create([
            'name' => 'is',
            'type' => 'text',
            'value' => 'Is',
        ]);
        Operator::create([
            'name' => 'is_not',
            'type' => 'text',
            'value' => 'Is Not',
        ]);
        Operator::create([
            'name' => 'starts_with',
            'type' => 'text',
            'value' => 'Starts With',
        ]);
        Operator::create([
            'name' => 'ends_with',
            'type' => 'text',
            'value' => 'Ends With',
        ]);
        Operator::create([
            'name' => 'contains',
            'type' => 'text',
            'value' => 'Contains',
        ]);
        Operator::create([
            'name' => 'doesnot_contains',
            'type' => 'text',
            'value' => 'Does NOt Contains',
        ]);
        Operator::create([
            'name' => 'doesnot_starts_with',
            'type' => 'text',
            'value' => 'Does Not Start With',
        ]);
        Operator::create([
            'name' => 'doesnot_end_with',
            'type' => 'text',
            'value' => 'Does Not End With',
        ]);


        Operator::create([
            'name' => 'on',
            'type' => 'date',
            'value' => 'On',
        ]);
        Operator::create([
            'name' => 'before',
            'type' => 'date',
            'value' => 'Before',
        ]);
        Operator::create([
            'name' => 'after',
            'type' => 'date',
            'value' => 'After',
        ]);
        Operator::create([
            'name' => 'between',
            'type' => 'date',
            'value' => 'Between',
        ]);
        Operator::create([
            'name' => 'on or after',
            'type' => 'date',
            'value' => 'On or After',
        ]);
        Operator::create([
            'name' => 'on or before',
            'type' => 'date',
            'value' => 'On or Before',
        ]);
    }
}
