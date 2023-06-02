<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/svg+xml" href="../../public/Images/Accueil/logo_petit.png" witdh="2px" height="2px">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome">
    <script src="https://kit.fontawesome.com/15aea1632c.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <a href="index.php"><img class="logo" src="public/Images/Accueil/logo_cadence_blanc.png"></a>
        <div class="hamburger">
            <div class=line></div>
            <div class=line></div>
            <div class=line></div>
        </div>
        <?php include 'app/view/common/navigation.php' ?>     
    </header>
<script>
    hamburger = document.querySelector('.hamburger');
    hamburger.onclick = function() {
        navBar = document.querySelector('.navbar');
        navBar.classList.toggle('active');
    }
</script>