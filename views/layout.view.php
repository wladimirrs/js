<!DOCTYPE html> <!-- Diese Seite ist das Template, da auf jeder Seite gleich -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Projekt</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="keywords" content = "PHP, Loginprojekt"> <!-- nicht mehr relevant -->
</head>
<body>
    <nav class="main-nav"> <!-- Navigationsleiste -->
        <?php
            $nav_links = [ // Links als Array
                "Home" => "1",
                "Seite 1" => "4",
                "Seite 2" => "5",
                "Seite 3" => "6",
                "Seite 4" => "7",
                "Seite 5" => "8",
                ];
            $current_nav = $_GET["nav"] ?? 1; // Holt den aktuellen nav-Parameter aus der URL
        ?>

        <div class="nav-header">
            <h2 class="nav-title">Mein kleines Projekt</h2>
        </div>

        <ul>
            <?php foreach ($nav_links as $title => $nav_id) : ?>
                <li>
                    <a href="index.php?nav=<?= $nav_id ?>   class ="nav-link"   <?=  ($current_nav == $nav_id) ? "active" : "" ?>"><?=  $title ?></a>" 
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="main-wrapper">
        <div class="flash-container"> <!-- Container für Messages wie "erfolgreich eingeloggt" etc. -->
            <?php 
                $flash->display();
            ?>
        </div>

        <header>
            <div class="header-user-info"> <!-- Wenn eingeloggt, Willkommensnachricht und Logout-Link -->
                <?php if (isset($_SESSION["username"])) : ?>
                    <span>Willkommen, <strong><?= htmlspecialchars($_SESSION["username"]) ?>!</strong></span>
                    <a href="index.php?nav=3" class="logout-link">Logout</a>
                <?php endif; ?>
            </div>
        </header>


        <main class="main-content">
            <?php
            if (!isset($_SESSION["username"]) && in_array($current_nav, ['1', '6'])) {
                require "views/login.view.php";
            } else {
                require ($template);
            } ?>
        </main>

        <footer class="site-footer">
            <p>&copy; <?=  date("Y"); ?></p> <!-- aktuelles Datum -->
        </footer>

    </div>

</body>
</html>