<?php

namespace Database\Seeders;


use Modules\PkgProduit\database\seeders\DatabaseSeederProduit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call([
            ProduitSeeder::class,
            DatabaseSeederProduit::class,
            RuleSeeder::class,

        ]);
    }
}
