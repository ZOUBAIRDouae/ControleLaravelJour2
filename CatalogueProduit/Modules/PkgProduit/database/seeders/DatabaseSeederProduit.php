<?php

namespace Modules\PkgProduit\Database\Seeders;

use Modules\PkgProduit\Models\Produit;
use Modules\PkgProduit\Models\Rule;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeederProduit extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call([
            ProduitSeeder::class,
            RuleSeeder::class,
        ]);
    }
}
