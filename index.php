<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP konta 😋</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .bi {
        font-size: 3rem;
    }
    .jumbo {
        background-image: url('vahetaBanner.php');
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
    }
    .card-img-top {
        width: 100%;
        height: 20vw;
        object-fit: cover;
    }
    .navbar-toggler-icon {
        filter: invert(1);
    }
</style>
</head>
<body>
            <div class="mb-4 jumbo">
            <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand text-dark" href="#">
                    <h2 class="fw-bold text-white">Kiviorg</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold" aria-current="page" href="index.php">AVALEHT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="index.php?leht=minust">MINUST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="index.php?leht=kontakt">KONTAKT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="index.php?leht=admin">ADMIN</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </div>
                <h1 class="display-4 fw-bold mt-5">Praktika Maltal</h1>
                <p class="pb-5">Minu valispraktika HKHKs</p>
                <br>
                <br>
            </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php
                    if (!empty($_GET['leht'])) {
                        $leht = htmlspecialchars($_GET['leht']);
                        $lubatud = array('minust', 'admin', 'kontakt');
                    
                        if (in_array($leht, $lubatud)) {
                            include($leht . '.php');
                        } else {
                            echo "<br>";
                            echo 'Valitud lehte ei eksisteeri';
                        }
                    } else {
                $postitused = file_get_contents('postitused.txt');
                $postitusedArray = explode("\n", $postitused);
                $postitusedArray = array_reverse($postitusedArray);

                foreach ($postitusedArray as $postitus) {
                    list($pealkiri, $lyhitekst) = explode(',', $postitus);
                    echo '<div class="card mt-2">
                            <div class="card-body">
                            <h5 class="card-title">' . $pealkiri . '</h5>
                            <p class="card-text">' . $lyhitekst . '</p>
                            </div>
                          </div>';
                }
            }
                ?>
                <div class="text-end mt-3">
                    <button class="btn btn-primary">Vaata vanemaid postitusi</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <i class="bi bi-check-circle d-block"></i>
        <small class="text-muted d-block">Kiviorg</small>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
    </html>