<?php

require 'DateCalculation.php';
 
$daysDiffernce = null;// to initialize the variable


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    // Create an instance of DateCalculator
    $dateCalculator = new DateCalculator($date1, $date2);
    $daysDifference = $dateCalculator->CalculateDays();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Difference Calculator</title>
</head>
<body>
    <h1>Calculate Days Between Two Dates</h1>
    <form method="post">
        <label for="date1">Date 1:</label>
        <input type="date" name="date1" required>
        <br>
        <label for="date2">Date 2:</label>
        <input type="date" name="date2" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($daysDifference !== null): ?>
        <h2>Difference: <?= $daysDifference ?> days</h2>
    <?php endif; ?>
</body>
</html>