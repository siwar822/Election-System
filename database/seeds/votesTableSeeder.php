<?php
use App\Vote;
use Illuminate\Database\Seeder;

class votesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Vote::class, 100)->create();
    }
}
