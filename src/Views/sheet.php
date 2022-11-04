<?php
include 'includes/_header.php';
require '../src/Controllers/DiceController.php';
?>

<main>
<div class="dice-container">
    <?php

    $roll = new DiceController();
    $dice = $roll->roll3d6();
    echo $roll->displayDice($dice);

    ?>
</div>
</main>

<?php include 'includes/_footer.php'; ?>