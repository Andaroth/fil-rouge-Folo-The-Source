<?php

/* Model/Manager */
require 'NewsletterManager.php';
if (!isset($newsletterManager)) {
    $newsletterManager = new NewsletterManager;
}

/* Add to the DB */
if (isset($_POST['newsletterSubmit'])){
    $email = $_POST['email'];
    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)){
        $newsletterManager->addSubscriber($email)
    } else {
        echo "Email incorrect";
    }
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FOLOTHESOURCE.COM</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lobster" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicon/apple-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicon/favicon-16x16.png">
    <link rel="manifest" href="./Favicon/manifest.json">
    <meta name="theme-color" content="#7CBFE0"/>
    <meta name="Description" content="Length: 1 pages"/>
</head>

<body>
<div class="firstPage">
    <div class="container">
        <h1>Folo the source</h1></br>
        <h2>Coming Soon, subscribe to our newsletter</h2>
        <div class="aboutMe">
            <text id="Description">The winner of ‘Talent of Guinea’ (Paris, March 2015, Best group) and again nominated
                for the Guinean
                Music Awards (November 2015), N’Faly Kouyaté, is a multi-talented artist coming from a deeply
                traditional background. Recently nominated as ‘Ambassador of the Intercultural Dialogue’ in Belgium,
                winner of the ‘Guinée Music Award’ 2012, nominated for the ‘Octaves de la Musique 2012’ in Belgium,
                nominated as ‘Talent Acoustique’ on TV5 Monde, he released his new album ‘CHANGE’ on 5th August 2015 in
                London.
            </text>
            <img alt="Arrow" id="bot" src="109681%20(1).svg"/>
        </div>
    </div>
</div>

<div class="fifthPage">
    <div id="form-main">
        <div id="form-div">
            <form class="form" id="form1" action="" method="post">
                <p class="email">
                    <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email"
                           placeholder="Email"/>
                </p>
                <div class="submit">
                    <input name="newsletterSubmit" type="submit" value="Subscribe Now" id="button-blue"/>
            </form>
        </div>
    </div>
</body>
<script src="app.js"></script>
<script src="./upup.min.js"></script>
<script>
    UpUp.start({
        'content-url': 'offline.html'
    });
</script>
</html>
