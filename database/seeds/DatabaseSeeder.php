<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(LoginsTableSeeder::class);
        $this->call(CandidatsTableSeeder::class);
        $this->call(VotersTableSeeder::class);
        $this->call(VotesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
    }
}