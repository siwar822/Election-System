<?php

use App\Voter;
use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Voter::class, 100)->create();
    }
}
