<?php include 'views/header.php'; ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">🍽 All Recipes</h2>

    <div class="row">
        <?php
        
        $recipes = [
            [
                "title" => "Classic Carbonara",
                "image" => "res/Classic Carbonara.webp",
                "description" => "A creamy and rich Italian pasta made with egg, cheese, and pancetta.",
                "link" => "recipe-detail.php?id=1"
            ],
            [
                "title" => "Chicken Adobo",
                "image" => "res/Chicken Adobo.jpg",
                "description" => "A savory Filipino dish simmered in soy sauce, vinegar, and garlic.",
                "link" => "recipe-detail.php?id=2"
            ],
            [
                "title" => "Beef Stroganoff",
                "image" => "res/Beef Stroganoff.jpg",
                "description" => "Tender beef strips in a creamy mushroom sauce over egg noodles.",
                "link" => "recipe-detail.php?id=3"
            ],
            [
                "title" => "Vegan Buddha Bowl",
                "image" => "res/Vegan Buddha Bowl.jpg",
                "description" => "A colorful and healthy bowl packed with quinoa, chickpeas, and veggies.",
                "link" => "recipe-detail.php?id=4"
            ],
            [
                "title" => "Sinigang sa Miso",
                "image" => "res/Sinigang sa Miso.jpg",
                "description" => "A pinoy stir-fried noodle dish with shrimp, peanuts, lime, and tamarind.",
                "link" => "recipe-detail.php?id=5"
            ],
            [
                "title" => "Chocolate Lava Cake",
                "image" => "res/Chocolate Lava Cake.jpg",
                "description" => "A chocolate cake is a cake made with chocolate or cocoa. The ingredients are put into a bowl and mixed together; then the mixed ingredients are put into a cake tin and put in an oven until it is fully cooked. Then the cake is taken out of the oven and placed on a cooling stand..",
                "link" => "recipe-detail.php?id=6"
            ]
        ];

        foreach ($recipes as $recipe) {
            echo '
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="' . $recipe["image"] . '" class="card-img-top" alt="' . $recipe["title"] . '">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">' . $recipe["title"] . '</h5>
                        <p class="card-text text-muted">' . $recipe["description"] . '</p>
                        <a href="' . $recipe["link"] . '" class="btn btn-warning mt-auto">View Recipe</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<?php include 'views/footer.php'; ?>
