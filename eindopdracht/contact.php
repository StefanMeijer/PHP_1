<?php
    $color;
    $currentTime = date('H:i');
    if ($currentTime >= '09:00' && $currentTime <= '19:00') {
        $color = 'light';
    } else {
        $color = 'dark';
    }

    $error = array();
    $succes = '';
    if (isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            array_push($error, "Email is niet ingevuld!");
        } else if (empty($_POST['flexRadioDefault'])) {
            array_push($error, "Prachtige website knop is niet aangevinkt!");
        } else if (empty($_POST['lijst'])) {
            array_push($error, "Er is geen dans aangevinkt");
        } else if (empty($_POST['automerk'])) {
            array_push($error, "Je hebt geen favoriete automerk aangeklikt");
        }

        if (!empty($_POST['email']) && !empty($_POST['flexRadioDefault']) && !empty($_POST['lijst']) && !empty($_POST['automerk']) ) {
            $succes = 'Alles correct, veel plezier met SPAM';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <title>Eindopdracht PHP</title>
</head>

<body class="<?php echo $color ?>">
    <nav class="navbar navbar-expand-lg">
        <div class="container bg-secondary">
            <a class="navbar-brand" href="index.php">
                <img src="assets/pictures/logo.png" width="100" height="20" class="img-fluid" alt="logo" />
            </a>
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-info" aria-current="page" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="rss.php">RSS-feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="contact.php"><b>Contact</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <h5 for="exampleInputEmail1" class="form-label">Email address</h5>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"><i>Je zult heel veel spam binnen krijgen.</i></div>
                    </div>

                    <h5>Is dit een prachtige website?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ja
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Ja
                        </label>
                    </div>

                    <h5 class="mt-3">Vink aan als je een dans kent</h5>
                    <div class="form-check">
                        <input class="form-check-input" name="lijst" type="checkbox" value="ja1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Kabouter plop dans
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="lijst" type="checkbox" value="ja2" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Macarena dans
                        </label>
                    </div>

                    <h5>Welk automerk spreekt u het meest aan?</h5>
                    <select class="form-select" name="automerk" aria-label="Default select example">
                        <option disabled selected>Open dit menu</option>
                        <option value="honda">Honda</option>
                        <option value="volkswagen">Volkswagen</option>
                        <option value="renault">Renault</option>
                    </select>

                    <button type="submit" name="submit" class="btn btn-danger mt-3">Opsturen!</button>
                    <div id="buttonHelp" class="form-text"><i>Durf je het op te sturen?</i></div>
                </form>

                <div class="col-md-12">
                    <span class="text-danger">
                        <?php
                            foreach ($error as $message) {
                                echo $message . '<br>';
                            }
                        ?>
                    </span>

                    <span class="text-success">
                        <?php
                            echo $succes;
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>