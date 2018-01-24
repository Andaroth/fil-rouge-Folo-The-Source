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
