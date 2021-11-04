<?php
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
                        <a class="nav-link text-info" aria-current="page" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="rss.php"><b>RSS-feed</b></a>
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
                <?php
              $feed = simplexml_load_file('https://css-tricks.com/feed/');

              foreach ($feed->channel->item as $item) {
                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $pubDate = $item->pubDate;

                print '<div>';
                printf('
                <h2>%s</h2>
                <a href="%s">%s</a>

                <h3>Description</h3>
                <p>%s</p>',
                $title, $link, $link, $description);
                echo '</div>';
              }
              ?>
            </div>
        </div>
    </div>

</body>

</html>