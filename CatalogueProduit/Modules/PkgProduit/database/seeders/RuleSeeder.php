<?php

namespace Modules\PkgProduit\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PkgProduit\Models\Rule;

class RuleSeeder extends Seeder
{
    public function run()
    {
        Rule::create([
            'label'      => 'Alerte stock faible',
            'expression' => 'stock < 5 && prix > 100'
        ]);

        Rule::create([
            'label'      => 'Stock nul',
            'expression' => 'stock == 0'
        ]);
    }
}
