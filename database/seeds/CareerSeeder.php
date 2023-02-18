<?php

use App\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Career::create([
                'position' => "Nurse",
                'location' => 'Mandalay',
                'salary' => 300000,
                'latest_date' => "30-2-2023",
                'requirment' => "Dolores sit sint laboriosam dolorem culpa et autem",
                'description' => "Dolores sit sint laboriosam dolorem culpa et autemDolores sit sint laboriosam dolorem culpa et autemDolores sit sint laboriosam dolorem culpa et autem",
            ]);
        }
    }
}
