<?php
    $array = array(
        "Formule1", 
        "Simracing",
        "Autoracen algemeen", 
        "Programmeren"
    );

    $color;
    $currentTime = date('H:i');
    if ($currentTime >= '09:00' && $currentTime <= '19:00') {
        $color = 'light';
    } else {
        $color = 'dark';
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
                        <a class="nav-link text-info" aria-current="page" href="index.php"><b>Home</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="rss.php">RSS-feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Welkom op deze prachtige eindopdracht pagina.<br>
                    Ik ga in deze website elementen verwerken, waaronder:<br>
                <ul>
                    <li>
                        Een homepage, met info over mijzelf, aangevuld met een HTML-5 video en een overzicht van mijn
                        hobby's en intresses doormiddel van een loop.
                    </li>
                    <li>
                        Een RSS-feed pagina, de feed wordt weergeven met het gebruik van PHP.
                    </li>
                    <li>
                        Een info form, met verplichte elementen: text(area), radio buttons, checkboxes en een dropdown.
                        Er wordt met PHP gecontroleert of de velden zijn ingevuld.
                    </li>
                    <li>
                        De website verandert van uiterlijk gebaseerd op tijd(dark/light mode). <span
                            class="text-dark bg-light">09:00 -> 19:00 licht</span> & <span
                            class="bg-dark text-light">19:00 -> 09:00 donker</span>
                    </li>
                </ul>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>Wie ben ik</h1>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p>Ik ben Stefan Meijer, 19 jaar oud, woonachtig in Erica en volg momenteel de opleiding HBO
                            Informatica(voltijd) aan het NHL Stenden in Emmen.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Hobby's en intresses</h2>

                        <ul>
                            <?php
                            foreach ($array as $key) {
                            ?>
                            <li>
                                <?php echo $key ?>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <video width="320" height="240" controls>
                    <source src="assets/videos/kabouter.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h2>Kabouter plop dans</h2>
            </div>
        </div>
    </div>


</body>

</html>