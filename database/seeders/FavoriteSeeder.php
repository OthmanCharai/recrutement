<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $canidates=Candidate::all();

        Job::all()->each(function ($job) use ($canidates) {
            $job->liked()->attach(
            $canidates->random(rand(1, 3))->pluck('id')->toArray(),
            );
        });

    }
}
