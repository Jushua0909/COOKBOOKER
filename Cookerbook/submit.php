<?php include 'views/header.php'; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">📝 Submit Your Recipe</h2>

    <form action="models/submit_recipe.php" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">

        <div class="form-group">
            <label for="title">Recipe Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Spaghetti Bolognese" required>
        </div>

        <div class="form-group">
            <label for="description">Short Description</label>
            <textarea class="form-control" id="description" name="description" rows="2" placeholder="Give a quick overview of your dish..." required></textarea>
        </div>

        <div class="form-group">
            <label for="ingredients">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="4" placeholder="List ingredients, one per line..." required></textarea>
        </div>

        <div class="form-group">
            <label for="instructions">Cooking Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" placeholder="Describe how to make the dish..." required></textarea>
        </div>

        <div class="form-group">
            <label for="prep_time">Preparation Time (in minutes)</label>
            <input type="number" class="form-control" id="prep_time" name="prep_time" min="1" placeholder="e.g. 30" required>
        </div>

        <div class="form-group">
            <label for="image">Upload a Photo</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-warning mt-3">📤 Submit Recipe</button>
    </form>
</div>

<?php include 'views/footer.php'; ?>
