<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Folo The Source</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="./css/font.css">
  <link rel="stylesheet" href="./css/materialize.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="purple darken-4">
  <?php include('topbar.php'); ?>  
  <div class="row container">
    <h2>Contact me</h2>
    <div class="valign-wrapper">
      <div class="card col s6">
        <address>
          <div class="card-content">
            <h3>Where to find me</h3>
            <ul>
              <li><i class="material-icons prefix">place</i> Rue Victor Rauter, 143<br>&horbar; 1070 BRUSSELS</li>
              <li><i class="material-icons prefix">phone</i> (+32) 2 318 55 81</li>
              <li><i class="material-icons prefix">mail</i> contact@nfalykouyate.com</li>
            </ul>
          </div>
          <div class="card-action">
            <a href="#mailing">Send me a mail</a>
          </div>
        </address>
      </div>
      <div class="col s6">
        <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.852813597105!2d4.306633515930707!3d50.83389016754236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c41e7805c859%3A0xbef1db11ef462c98!2sRue+Victor+Rauter+143%2C+1070+Anderlecht!5e0!3m2!1sfr!2sbe!4v1517236104791" 
         width="100%" 
         height="315"
         frameborder="0" 
         style="border:0"> 
        </iframe>
      </div>
    </div>
  </div>
  <div class="parallax-container h-200">
    <div class="parallax"><img src="https://lorempixel.com/250/250/nature/4" alt="Nature 3"></div>
  </div>
  <div id="mailing" class="mailing orange darken-4 pt-25 mb-0 row">
    <form class="container" action="" method="get">
      <h2>Drop me a line</h2>
      <div class="row">
        <div class="col s6">
          <label for="first_name">Name</label>
          <input placeholder="Name" id="name" type="text" class="validate">
          <label for="first_name">Mail</label>
          <input placeholder="Mail" id="Mail" type="text" class="validate">
        </div>
        <div class="col s6">
          <label for="textarea1">Your message</label>
          <textarea id="textarea1" id="message" class="materialize-textarea textarea1"></textarea>
        </div>
      </div>
      <div class="row center-align">
        <a class="center-align waves-effect waves-light btn deep-orange darken-4">Send</a>
      </div>
    </form>
  </div>
  <?php include('footer.php'); ?>
  <script src="./js/jquery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/app.js"></script>
</body>
</html>