<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];
    $postitused = file_get_contents('postitused.txt');
    $postitusedArray = explode("\n", $postitused);

    if (isset($postitusedArray[$index])) {
        unset($postitusedArray[$index]);
        $postitused = implode("\n", $postitusedArray);
        file_put_contents('postitused.txt', $postitused);
    }
}

// Redirect back to the main page
header('Location: index.php');
exit();
?>
