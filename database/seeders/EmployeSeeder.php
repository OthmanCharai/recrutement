<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nbCandidate=(int)$this->command->ask("type Employe Number");
        Employe::factory()->count($nbCandidate)->create();
        
    }
}
