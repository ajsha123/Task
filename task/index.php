<?php

require 'reverse.php';//include class file

$reversedString = null; // to initialize the variable

if($_SERVER['REQUEST_METHOD']=== 'POST') {
    $inputString = $_POST['inputString'];

    //To create an instance reversedString
    $stringReverser = new ReverseString($inputString);
    $reverseString = $stringReverser->reverseWords();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To reverse words</title>
</head>
<body>
    <h1>Reverse words</h1>
    <form method="post">
        <label for="inputString">Input String</label>
        <input type="text" name="inputString" required>
        <br>
        <button type="submit">Reverse</button>
    </form>

    <?php if ($reversedString !== null);?>
    <h2>Output: <?=htmlspecialchars($reverseString) ?>
    </h2>

</body>
</html>

