<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $players = [
            [
                'name' => 'Tony Krogh',
                'ign' => 'VVVTony',
                'photo_url' => 'https://thispersondoesnotexist.com/',
                'instagram_url' => 'https://instagram.com/tony',
                'facebook_url' => 'https://facebook.com/tony',
                'team_id' => 1,
            ],
            [
                'name' => 'Stig Olsen',
                'ign' => 'VVVStig',
                'photo_url' => 'https://thispersondoesnotexist.com/',
                'instagram_url' => 'https://instagram.com/stig',
                'facebook_url' => 'https://facebook.com/stig',
                'team_id' => 1,
            ],
            [
                'name' => ' Jannik Abildgaard',
                'ign' => 'VVVJannik',
                'photo_url' => 'https://thispersondoesnotexist.com/',
                'instagram_url' => 'https://instagram.com/jannik',
                'facebook_url' => 'https://facebook.com/jannik',
                'team_id' => 1,
            ],
            [
                'name' => 'Steffen Wulff',
                'ign' => 'VVVSteffen',
                'photo_url' => 'https://thispersondoesnotexist.com/',
                'instagram_url' => 'https://instagram.com/steffen',
                'facebook_url' => 'https://facebook.com/steffen',
                'team_id' => 1,
            ],
            [
                'name' => 'Storm Mork',
                'ign' => 'VVVStorm',
                'photo_url' => 'https://thispersondoesnotexist.com/',
                'instagram_url' => 'https://instagram.com/storm',
                'facebook_url' => 'https://facebook.com/storm',
                'team_id' => 1,
            ],
        ];

        foreach ($players as $player) {
            DB::table('players')->insert($player);
        }
    }
}
