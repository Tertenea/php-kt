<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Format the data
    $formattedData = "$title, $description";

    // Append to the text file (you can replace 'data.txt' with your desired filename)
    file_put_contents('postitused.txt', $formattedData . PHP_EOL, FILE_APPEND);

    // Redirect back to the form (you can customize the redirect URL)
    header('Location: index.php');
    exit();
}

?>
