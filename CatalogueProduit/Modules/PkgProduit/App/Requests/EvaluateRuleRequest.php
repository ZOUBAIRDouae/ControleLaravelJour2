<?php

namespace Modules\PkgProduit\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluateRuleRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize()
    {
        // Pour cet exemple, on autorise toujours la requête.
        return true;
    }

    /**
     * Règles de validation de la requête.
     */
    public function rules()
    {
        return [
            'stock' => 'required|numeric',
            'prix'  => 'required|numeric',
            'rule'  => 'required|string'
        ];
    }
}
