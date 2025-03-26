<?php

namespace Modules\PkgProduit\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PkgProduit\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        Produit::create([
            'name'   => 'Produit A',
            'stock' => 10,
            'price'  => 99.99,
        ]);

        Produit::create([
            'name'   => 'Produit B',
            'stock' => 5,
            'price'  => 150.50,
        ]);

        Produit::create([
            'name'   => 'Produit C',
            'stock' => 0,
            'price'  => 75.25,
        ]);
    }
}
