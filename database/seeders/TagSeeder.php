<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tags=[
            'completed','work in progress','indie','casual'
        ];

        foreach ($tags as $tag) {
            $newtag= new Tag();
            $newtag->name=$tag;
            $newtag->color=$faker->safeHexColor();
            $newtag->save();
        }
    }
}
