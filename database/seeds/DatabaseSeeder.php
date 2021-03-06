<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        $this->call(UserDetailsSeeder::class);
//        $this->call(MohLocationSeeder::class);
//        $this->call(MohDengueCasesSeeder::class);
//        $this->call(MohDengueCases2014Seeder::class);
        $this->call(MohDenguePredictions2013Seeder::class);
        $this->call(MohDenguePredictions2014Seeder::class);
    }
}
