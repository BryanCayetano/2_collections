<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\es_ES\Person;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => $faker -> name,
            'email' => $faker -> email,
            'dni' => $faker -> dni(),
        ]);
    }
}
