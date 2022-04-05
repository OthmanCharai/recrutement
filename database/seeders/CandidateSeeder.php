<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Cv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nbCandidate=(int)$this->command->ask("type Candidate Number");
        Candidate::factory()->count($nbCandidate)->create();

    }
}
