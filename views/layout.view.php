<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezepte</title>
    <link rel="stylesheet" href="css/main.css">
    <meta property="og:title" content="Meine Rezepte">
    <meta name="keywords" content="Rezepte, PHP, SQL">
</head>











<body>
    <nav class="main-nav">
        <?php // Liste aus Titel + id
            $nav_links = ["Home" => "1", "Seite 1" => "5", "Benutzer" => "6", "Seite 3" => "7", "Seite 4" => "8", "Seite 5" => "9"];
            $current_nav = $_GET["nav"] ?? 1;?>

        <div>
            <h2 class="nav-title">Kochbuch</h2>
        </div>

        <ul>
            <?php foreach ($nav_links as $title => $nav_id): ?> <!-- List-Item für jeden Array-Eintrag, mit jeweils Link und nav entsprechend der Liste, Klasse active oder nicht -->
                <li>
                <a href="index.php?nav=<?= $nav_id ?>" class="nav-link <?= ($current_nav == $nav_id) ? "active" : "" ?>"><?= $title ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
    </nav>

    <div class="main-wrapper">
        <div class="flash-container"> <!-- Flash-Funktion -->
            <?php $flash->display(); ?>
        </div>

        <header>
            <div class="header-user-info"> <!-- Wenn Nutzername gesetzt, hallo Nutzername und Logout-Link -->
                <?php if(isset($_SESSION["username"])) : ?>
                <span>Willkommen, <strong><?= htmlspecialchars($_SESSION["username"]) ?></strong>!</span>
                <a href="index.php?nav=3" class="logout-link">Logout</a>
            </div>
        </header>
    </div>








    
</body>
















</html>