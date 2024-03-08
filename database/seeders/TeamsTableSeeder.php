<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        $teams = [
            [
                'name' => 'Veni Vidi Vici',
                'logo_url' => 'https://img001.prntscr.com/file/img001/gp02l4BeTZmB12-bvgrZ1A.png',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non semper suscipit posuere a pede.',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
