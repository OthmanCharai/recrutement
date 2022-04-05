<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Cv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nbCv=(int)$this->command->ask("type Cv Number");
        $candidates=Candidate::all();
        Cv::factory()->count($nbCv)->make()->each(function ($cv) use($candidates) {
            $cv->candidate_id=$candidates->random()->id;
            $cv->save();
        });
    }
}
