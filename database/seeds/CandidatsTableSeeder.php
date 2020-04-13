<?php
use App\Candidat;
use Illuminate\Database\Seeder;

class CandidatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Candidat::class, 50)->create();
    }
}
