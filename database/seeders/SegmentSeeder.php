<?php

namespace Database\Seeders;

use App\Models\Segment;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Segment::create([
           'name' => 'Starts with and Contains'
        ]);
        Segment::create([
            'name' => 'On Between OnBefore OnAfter'
        ]);

    }
}
