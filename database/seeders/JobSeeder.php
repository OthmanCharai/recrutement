<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Employe;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nbCandidate=(int)$this->command->ask("type jobs Number");
        $employe=Employe::all();
        Job::factory()->count($nbCandidate)->make()->each(function ($job) use($employe) {
            $job->employe_id=$employe->random()->id;
            $job->save();
        });

        $jobs=Job::all();
        $candidates=Candidate::all();
        foreach ($candidates as $candidate){
            foreach ($jobs as $job){
                $candidate->jobs()->syncWithoutDetaching(
                    [$job->id=>['cv'=>"https://via.placeholder.com/640x480.png/00aacc?text=rerum"]]
                );
            }
        }
    }
}
