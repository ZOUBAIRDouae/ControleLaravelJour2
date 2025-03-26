<?php

namespace Modules\PkgProduit\App\Services;

class RuleEngine
{
    /**
     * Évalue une expression sur la base d'un tableau de données.
     *
     * @param string $expression L'expression à évaluer (exemple : "stock < 5 && prix > 100")
     * @param array  $data       Le tableau de données sur lequel l'expression s'applique.
     *
     * @return bool Le résultat de l'évaluation.
     */
    public function evaluate(string $expression, array $data): bool
    {
        $stock = $data['stock'];
        $prix = $data['prix'];
        // Replace variables in the rule with the actual values from $data
        $rule = str_replace(['stock', 'prix'], [$stock, $prix], $expression);

        // Now evaluate the expression using eval (be cautious!)
        return (bool) eval ('return ' . $rule . ';');
    }
}
