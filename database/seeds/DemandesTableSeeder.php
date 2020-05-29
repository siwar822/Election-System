<?php
use App\Demande;
use Illuminate\Database\Seeder;

class DemandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Demande::class, 100)->create();
    }
}
