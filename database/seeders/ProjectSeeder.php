<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<20;$i++)
        {
            $project = new Project();

            $project->title = $faker->words(3,true);
            $project->date = $faker->dateTimeBetween('-3 days','+3 days');
            $project->description = $faker->text(200);
            $project->author = $faker->words(3,true);
            
            $project->slug = Str::slug($project->title,'-');
            $project->save();
        }
    }
}
