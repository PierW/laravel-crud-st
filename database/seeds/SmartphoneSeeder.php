<?php

use Illuminate\Database\Seeder;
use App\Smartphone;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Smartphone::class, 10) -> create();
    }
}
