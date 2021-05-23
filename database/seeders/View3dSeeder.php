<?php

namespace Database\Seeders;

use \App\Models\View3d;
use Illuminate\Database\Seeder;

class View3dSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       View3d::factory()
            ->count(3)
            ->create();
    }
}
