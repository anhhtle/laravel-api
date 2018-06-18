<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MmasTableSeeder extends Seeder
{
    // use Carbon\Carbon;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dateOne = Carbon::create(2018, 7, 17, 12, 00, $tz);

        $rows = [
            [
                'fighter_one' => 'Jake Matthews',
                'fighter_one_odd' => -500,
                'fighter_two' => 'Shinsho Anzai',
                'fighter_two_odd' => 350,
                'event_title' => 'UFC FIGHT NIGHT 132 - SINGAPORE INDOOR STADIUM, KALLANG, SINGAPORE',
                'time' => '2018-08-19 12:00:00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'fighter_one' => 'Fighter One',
                'fighter_one_odd' => -200,
                'fighter_two' => 'Fighter Two',
                'fighter_two_odd' => 150,
                'event_title' => 'TEST TITLE',
                'time' => '2018-07-7 17:30:00',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        foreach ($rows as $row) {
            $insert= DB::table('mmas')->insert($row);
        }

    }
}
