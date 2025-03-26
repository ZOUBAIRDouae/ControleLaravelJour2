<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Évaluation de la règle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Résultat de l'évaluation de la règle</h1>

        <div class="card mb-3">
            <div class="card-header">
                Détails du produit
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><strong>Name :</strong> {{ $product['name'] }}</li>
                    <li><strong>Stock :</strong> {{ $product['stock'] }}</li>
                    <li><strong>Prix :</strong> {{ $product['prix'] }} €</li>
                </ul>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                Règle appliquée
            </div>
            <div class="card-body">
                <p class="mb-0">{{ $rule }}</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Résultat de l'évaluation
            </div>
            <div class="card-body">
                @if($result)
                    <div class="alert alert-success">
                        La règle est <strong>vraie</strong>.
                    </div>
                @else
                    <div class="alert alert-danger">
                        La règle est <strong>fausse</strong>.
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
