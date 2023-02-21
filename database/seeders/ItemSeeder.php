<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\item;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        item::factory(10)->create();
    }
}
