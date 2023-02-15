<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'name' => "Hello",
                'photo' => 'http://lorempixel.com/640/480/',
                'gender' => 'Female',
                'department' => "Dental",
                'bechelor' => "Cashier",
                'age' => 40,
                'experience' => "Dolores sit sint laboriosam dolorem culpa et autem",
                'specialist' => "Heart",
            ]);
        }
    }
}
