<?php

/* Model/Manager */
require 'NewsletterManager.php';
if (!isset($newsletterManager)){
  $newsletterManager = new NewsletterManager;
}

/* Add to the DB */
if (isset($_POST['newsletterSubmit'])){
  $email = $_POST['email'];
  $newsletterManager->addSubscriber($email);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FOLOTHESOURCE.COM</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Lobster" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    </script>
</head>

<body>
    <div class="firstPage">
        <div class="container">
            <h1>Folo the source</h1>
        </div>
    </div>
    <div class="secondPage">
        <h1>About Us</h1>
	</div>
	<div class="thirdPage">
        <h1>Videos</h1>
	</div>
	<div class="fourthPage">
        <h1>Photos</h1>
	</div>
	<div class="fifthPage">
			<div id="form-main">
					<div id="form-div">
					  <form class="form" id="form1" action="" method="post">
						<p class="email">
						  <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
						</p>
						<div class="submit">
						  <input name="newsletterSubmit" type="submit" value="Subscribe Now" id="button-blue"/>
					  </form>
					</div>
    </div>
</body>

</html>
