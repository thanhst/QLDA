<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Food;
use Illuminate\Support\Facades\File;
class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Food::query()->delete();
        $faker=Faker::create();
        for ($i = 0; $i < 30; $i++) {
            $file= $faker->randomElement(File::allFiles(public_path('food')));
            $file= str_replace(public_path(),'',$file);
            Food::create([
                "nameFood"=>$faker->firstName,
                "priceFood"=> $faker->randomFloat(2,0,10),
                "describe"=> $faker->paragraph(1),
                "imgFood" => $file,
            ]);
        }
    }
}
