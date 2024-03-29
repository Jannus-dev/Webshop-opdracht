<?php
    require_once 'pages/conn.php';
    $stmt = $conn->prepare("SELECT * FROM reviews LIMIT 3");
    $stmt->execute(); 
    $data = $stmt->fetchAll();
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bier Hier - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <div>
            <img id="logo" src="img/logo.png" alt="logo">
            <nav>
                <a href="#" id="knop">Home</a>
                <a href="pages/bestel.php" id="knop">Bestellen</a>
                <a href="#review" id="knop">Reviews</a>
                <a href="#over-ons" id="knop">Over Ons</a>
                <a href="#contact" id="knop">Contact</a>
            </nav>
            <a href="pages/login.php"><img src="img/account.png" alt="login" id="account-icon"></a>
        </div>
        <div class="header-content">
            <h1>
                Bier Hier
            </h1>
            <h2>
                Altijd voor jou
            </h2>
            <a href="#" id="knop">Bestellen</a>
            <img src="img/18plus.png" alt="18+">
        </div>
    </header>

    <main>
        <section class="review" id="review">
            <h1>Reviews</h1>

            <div class="review-list">
            <?php
                    foreach ($data as $row) {
                        echo "<div class='reviews'>";
                        echo "<h1 id='naam'>Naam: " . $row['name'] . "</h1>";
                        echo "<div class='review-content'>";
                        echo "<p>" . $row['review'] . "</p>";
                        echo "<div class='score'>";
                        echo "<p>" . $row['reting'] . "/5</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }


                ?>
                <a href="pages/reviews.php" id="knop">Meer →</a>
            </div>
        </section>

        <section class="over-ons" id="over-ons">
            <h1>Over Ons</h1>
            <div class="over-ons-content">
                <h2>Wij zijn de familie Hop</h2>
                <p>Wij zijn sinds 1945 werkzaam in de bierindustrie om mensen te adviseren over bier.</p>
                <p>Onze passie voor bier stroomt al generaties door ons bloed en zit er nog altijd in.</p>
            </div>
        </section>

        <?php
        include 'pages/footer.php'
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>