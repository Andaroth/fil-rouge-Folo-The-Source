<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/font.css">
  <link rel="stylesheet" href="./css/materialize.css">
  <link rel="stylesheet" href="./css/gallery.css">
  <title>Gallery</title>
</head>
<body class="purple darken-4">
  <?php include('topbar.php'); ?>
  <div class="container media">
    <div class="row images">
      <h2>Visit of Guinea</h2>
      <div id="gallerycarousel" class="carousel">
        <a class="carousel-item" href="#one!"><img src="./img/inauguration.jpg" alt="well's inauguration"></a>
        <a class="carousel-item" href="#two!"><img src="./img/inauguration2.jpg" alt="well's inauguration"></a>
        <a class="carousel-item" href="#three!"><img src="./img/needwater.jpg" alt="people needs water"></a>
        <a class="carousel-item" href="#four!"><img src="./img/presentation.jpg" alt="well's presentation"></a>
        <a class="carousel-item" href="#five!"><img src="./img/water.jpg" alt="well's water"></a>
        <a class="carousel-item" href="#five!"><img src="./img/well.jpg" alt="well"></a>
        <a class="carousel-item" href="#five!"><img src="./img/well2.jpg" alt="well"></a>
        <a class="carousel-item" href="#five!"><img src="./img/well3.jpg" alt="well"></a>
        <a class="carousel-item" href="#five!"><img src="./img/people.jpg" alt="Guinea's people"></a>
      </div>
    </div>
    <div class="row videos">
      <h2>What we have done - Videos</h2>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/5-txLZLQFyQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/9VK2J6fuPr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="row musics">
      <h2>Our Music</h2>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/Y5xmB1U_zoM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/GG7ZeCG-uJk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  <?php include('footer.php'); ?>
  <script src="./js/jquery.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/app.js"></script>
</body>
</html>
