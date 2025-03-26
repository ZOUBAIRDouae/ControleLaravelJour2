<?php

namespace Modules\PkgProduit\Controllers;

use Modules\PkgProduit\App\Requests\EvaluateRuleRequest;
use Modules\PkgProduit\App\Services\RuleEngine;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct(protected RuleEngine $ruleEngine) {
        
    }
    public function index()
    {
        $result = $this->ruleEngine->evaluate("stock < 5 && prix > 100", ["stock" => 3, "prix" => 150]);

        dd($result);
        // Transmission des données à la vue
        return view('PkgProduit::rule', compact('result'));
    }
}
