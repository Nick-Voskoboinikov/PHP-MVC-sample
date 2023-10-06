<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

<!-- CSS Reset -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

<!-- Milligram CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<!-- You should properly set the path from the main file. -->
    <title>Главная</title>
    <base href="/" target="_top">
    <link rel="stylesheet" href="css/styles.css" >
</head> 
    <body>
    <div class="fly-out-menu-btn"></div>
        <?php include ($content_view); ?>

    <div class="shadow"><dialog class="menu"><div class="close-menu">X</div>
    <ul>
        <li><a href="main/index">Main page</a></li>
        <li><a href="portfolio">Portfolio</a></li>
        <li><a href="main/aboutus">About us</a></li>
        <li><a href="main/contacts">Contacts</a></li>
        <li><a href="main/info">Running server info</a></li>
    </ul>

    </dialog></div>
    <script src="js/showMenu.js" defer></script>
    <script src="js/title.js" defer></script>
    </body> 
</html>
