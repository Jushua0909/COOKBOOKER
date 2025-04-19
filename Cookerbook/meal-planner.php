<?php include 'views/header.php'; ?>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">🍽️ Weekly Meal Planner</h2>
    <form action="models/save_meal_plan.php" method="POST" class="bg-light p-4 rounded shadow-sm">

        <?php
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $meals = ["Breakfast", "Lunch", "Dinner"];

        foreach ($days as $day): ?>
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark font-weight-bold">
                    <?php echo $day; ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($meals as $meal): ?>
                            <div class="col-md-4 mb-3">
                                <label for="<?= strtolower($day) ?>_<?= strtolower($meal) ?>">
                                    <?= $meal ?>
                                </label>
                                <select class="form-control" name="<?= strtolower($day) ?>[<?= strtolower($meal) ?>]" required>
                                    <option value="">-- Select Recipe --</option>
                                    <option value="Spaghetti Bolognese">Spaghetti Bolognese</option>
                                    <option value="Chicken Adobo">Chicken Adobo</option>
                                    <option value="Avocado Toast">Avocado Toast</option>
                                    <option value="Grilled Salmon">Grilled Salmon</option>
                                    <option value="Mango Smoothie">Mango Smoothie</option>
                                    <option value="Fried Rice">Fried Rice</option>
                                    <option value="Caesar Salad">Caesar Salad</option>
                                </select>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="text-center">
            <button type="submit" class="btn btn-success">🗓️ Save Meal Plan</button>
        </div>
    </form>
</div>

<?php include 'views/footer.php'; ?>
