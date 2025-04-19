<?php include 'views/header.php'; ?>

<?php
$recipes = [
    1 => [
        "title" => "Classic Carbonara",
        "image" => "res/Classic Carbonara.webp",
        "ingredients" => [
            "200g spaghetti",
            "2 large eggs",
            "100g pancetta",
            "50g grated parmesan cheese",
            "Salt and black pepper to taste"
        ],
        "instructions" => [
            "Cook spaghetti until al dente.",
            "Whisk eggs and cheese together in a bowl.",
            "Fry pancetta until crispy.",
            "Mix hot pasta with pancetta, remove from heat, and stir in egg mixture.",
            "Serve immediately with extra cheese and black pepper."
        ]
    ],
    2 => [
        "title" => "Chicken Adobo",
        "image" => "res/recipes/adobo.jpg",
        "ingredients" => [
            "1kg chicken, cut into pieces",
            "1/2 cup soy sauce",
            "1/2 cup vinegar",
            "6 garlic cloves, crushed",
            "2 bay leaves",
            "1 tsp whole black peppercorns"
        ],
        "instructions" => [
            "Combine all ingredients in a pot and marinate for 30 minutes.",
            "Bring to a boil and simmer until chicken is cooked and tender.",
            "Optional: fry chicken separately for added texture.",
            "Reduce sauce to thicken and pour over chicken before serving."
        ]
    ],
    3 => [
        "title" => "Beef Stroganoff",
        "image" => "res/Beef Stroganoff.jpg",
        "ingredients" => [
            "500g beef sirloin, sliced thin",
            "1 onion, chopped",
            "200g mushrooms, sliced",
            "1 cup sour cream",
            "1 tbsp flour",
            "2 tbsp butter",
            "Salt and pepper to taste"
        ],
        "instructions" => [
            "Sauté onion and mushrooms in butter until soft.",
            "Add beef and cook until browned.",
            "Stir in flour and cook briefly.",
            "Add sour cream and simmer until sauce thickens.",
            "Serve over cooked egg noodles or rice."
        ]
    ],
    4 => [
        "title" => "Vegan Buddha Bowl",
        "image" => "res/Vegan Buddha Bowl.jpg",
        "ingredients" => [
            "1 cup cooked quinoa",
            "1/2 cup chickpeas",
            "1 avocado, sliced",
            "1/2 cup shredded carrots",
            "1/2 cup steamed broccoli",
            "2 tbsp tahini dressing"
        ],
        "instructions" => [
            "Prepare all vegetables and ingredients.",
            "Arrange quinoa as a base in a bowl.",
            "Top with chickpeas, veggies, and avocado slices.",
            "Drizzle with tahini dressing before serving."
        ]
    ],
    5 => [
        "title" => "Sinigang sa Miso",
        "image" => "res/Sinigang sa Miso.jpg",
        "ingredients" => [
            "200g rice noodles",
            "200g shrimp, peeled",
            "2 eggs",
            "1/4 cup bean sprouts",
            "2 tbsp fish sauce",
            "2 tbsp tamarind paste",
            "1 tbsp brown sugar",
            "Chopped peanuts and lime wedges for garnish"
        ],
        "instructions" => [
            "Soak rice noodles in warm water until soft.",
            "Sauté shrimp until pink, set aside.",
            "Scramble eggs in the same pan.",
            "Add noodles, tamarind, fish sauce, and sugar.",
            "Stir in shrimp and bean sprouts, cook until hot.",
            "Top with peanuts and lime wedges."
        ]
    ],
    6 => [
        "title" => "Chocolate Lava Cake",
        "image" => "res/Chocolate Lava Cake.jpg",
        "ingredients" => [
            "100g dark chocolate",
            "100g butter",
            "2 eggs",
            "2 egg yolks",
            "50g sugar",
            "30g flour",
            "Butter and cocoa powder for ramekins"
        ],
        "instructions" => [
            "Grease ramekins and dust with cocoa powder.",
            "Melt chocolate and butter together.",
            "Whisk eggs, yolks, and sugar until light.",
            "Fold in chocolate mixture and flour.",
            "Pour into ramekins and bake at 200°C for 10–12 minutes.",
            "Serve warm with ice cream."
        ]
    ]
];

$recipeId = $_GET['id'] ?? null;

if ($recipeId && isset($recipes[$recipeId])) {
    $recipe = $recipes[$recipeId];
} else {
    echo "<div class='container mt-5 text-center'><h3>Recipe not found.</h3></div>";
    include 'views/footer.php';
    exit;
}
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center"><?php echo $recipe['title']; ?></h2>
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $recipe['image']; ?>" alt="<?php echo $recipe['title']; ?>" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
            <h4>🧂 Ingredients</h4>
            <ul>
                <?php foreach ($recipe['ingredients'] as $ingredient) {
                    echo "<li>$ingredient</li>";
                } ?>
            </ul>

            <h4 class="mt-4">👨‍🍳 Instructions</h4>
            <ol>
                <?php foreach ($recipe['instructions'] as $step) {
                    echo "<li>$step</li>";
                } ?>
            </ol>
        </div>
    </div>
</div>

<?php include 'views/footer.php'; ?>
