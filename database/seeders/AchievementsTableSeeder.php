<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementsTableSeeder extends Seeder
{
    public function run()
    {
        $achievements = [
            [
                'team_id' => 1,
                'achievement' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
            ],
            [
                'team_id' => 1,
                'achievement' => 'Aliquam tincidunt mauris eu risus.',
            ],
            [
                'team_id' => 1,
                'achievement' => 'Vestibulum auctor dapibus neque.',
            ],
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
