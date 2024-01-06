<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>Affichage des recettes</h1>
    <!-- Boucle sur les recettes -->
    <?php foreach ($recipes as $recipe) : ?>
        <!-- si la clé existe et a pour valeur "vrai", on affiche -->
        <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
            </article>

        <?php endif; ?>
    <?php endforeach ?>
</div>

    <h2>Exercice : Ma solution personnelle</h2>
    <?php
        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => 'Etape 1 : des flageolets !',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => 'Etape 1 : de la semoule',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => 'Etape 1 : prenez une belle escalope',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
        ];
        
        for($i=0; $i<=2; $i++){
            if(array_key_exists('is_enabled', $recipes[$i]) && $recipes[$i]['is_enabled']=== true){
                echo "
                        <h3>{$recipes[$i]['title']}</h3>
                        <p>{$recipes[$i]['recipe']}</p>
                        <p>{$recipes[$i]['author']}</p>
                    ";
            }
        }
    ?>
    <h2>Veillez juger et repondre svp! </h2>
</body>
</html>
