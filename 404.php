<?php http_response_code(404);?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">

    <link rel="icon"
          type="image/png"
          href="images/Yulius.png">

    <title>404 page not found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'templates/header.php';?>

<section class="container">
    <section class="container has-text-centered">
        <h2 class="h2 title">404 - Pagina niet gevonden.</h2>
        <h2 class="h2">
            Als u denkt dat dit een fout aan onze kant is, stuur alstublieft een email naar <a href="mailto:modraxisorg@gmail.com;ddehoogd@yuliusonderwijs.nl">modraxisorg@gmail.com</a>. Er zal dan snel iemand naar kijken.
            <br/>
            Als dit geen fout is, kunt u ook terug naar de homepage gaan.
        </h2>

        <a class="button button-dark hvr-grow" href="index.php">Back to home</a>
    </section>
</section>
</body>
<?php include 'templates/footerstatic.php';?>
</html>
