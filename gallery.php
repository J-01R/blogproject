<!--Jonatan Rassekhnia 
Professor Susan.F
Luleå Tech. University 
2023-07 
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto&display=swap" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Gallery</title>
</head>

<body>
  <?php include("path.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Gallery Page Content -->
  <div class="gallery-content">
    <h1>Winning Projects Gallery</h1>
    
    <!-- Gallery Item 1 -->
    <div class="gallery-item">
      <h2>Apple X Frames - Frame Artwork</h2>
      <img src="assets/images/Bookcover.jpg" alt="Apple X Frames - Frame Artwork" style="width: 300px;">
    </div>
    
    <!-- Gallery Item 2 -->
    <div class="gallery-item">
      <h2>Rocket X Model</h2>
      <img src="assets/images/Bookcover.jpg" alt="Rocket X Model" style="width: 300px;">
    </div>
    
    <!-- Gallery Item 3 -->
    <div class="gallery-item">
      <h2>Computer Science Masterpiece</h2>
      <img src="assets/images/Bookcover.jpg" alt="Computer Science Masterpiece" style="width: 300px;" >
    </div>
    
    <!-- Add more gallery items here -->
    <!-- <div class="gallery-item can be created for CSS on images, just a quick process">
      <h2>Project Title</h2>
      <img src="assets/images/gallery_image.jpg" alt="Project Title">
    </div> -->
  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
<!-- JQuery, social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


  <script src="assets/js/scripts.js"></script>
</body>

</html>
