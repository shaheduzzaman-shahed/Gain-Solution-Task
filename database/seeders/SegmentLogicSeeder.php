<?php

namespace Database\Seeders;

use App\Models\SegmentLogic;
use Illuminate\Database\Seeder;

class SegmentLogicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SegmentLogic::create([
           'segment_id' => '1',
           'logic' => 'first_name',
           'operator' => 'starts_with',
           'value' => 'Dr.',
           'condition' => 'and'
        ]);
        SegmentLogic::create([
           'segment_id' => '1',
           'logic' => 'last_name',
           'operator' => 'contains',
           'value' => 's',
           'condition' => 'and'
        ]);
        SegmentLogic::create([
           'segment_id' => '2',
           'logic' => 'created_at',
           'operator' => 'on or after',
           'value' => '2000-1-1',
           'condition' => 'or'
        ]);
        SegmentLogic::create([
           'segment_id' => '2',
           'logic' => 'created_at',
           'operator' => 'before',
           'value' => '2020-1-1',
           'condition' => 'and'
        ]);
        SegmentLogic::create([
           'segment_id' => '2',
           'logic' => 'birth_day',
           'operator' => 'on or before',
           'value' => '2000-1-1',
           'condition' => 'or'
        ]);
        SegmentLogic::create([
           'segment_id' => '2',
           'logic' => 'birth_day',
           'operator' => 'between',
           'value' => '1950-1-1,2000-1-1',
           'condition' => 'and'
        ]);

    }
}
