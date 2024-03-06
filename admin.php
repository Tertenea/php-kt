<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form action="postita.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Pealkiri:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Sisu:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Postita</button>
    </form>
    <?php
    $postitused = file_get_contents('postitused.txt');
    $postitusedArray = explode("\n", $postitused);
    $postitusedArray = array_reverse($postitusedArray);

    foreach ($postitusedArray as $postitus) {
        list($pealkiri, $lyhitekst) = explode(',', $postitus);
        echo '<div class="card mt-2">
                <div class="card-body">
                <h5 class="card-title">' . $pealkiri . '</h5>
                <p class="card-text">' . $lyhitekst . '</p>
                <form action="kustuta.php" method="post">
                    <input type="hidden" name="index" value="' . $index . '">
                    <button type="submit" class="btn btn-danger">Kustuta</button>
                </form>
                </div>
              </div>';
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
