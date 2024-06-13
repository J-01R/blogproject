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

  <title>Blog</title>
</head>

<body>
  <?php include("path.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Projects Page Content -->
  <div class="page-content">
    <h1>Ongoing Projects</h1>
    
    <!-- Project 1: Apple 1 Computer Replica -->
    <article class="project-article">
      <h2>Apple 1 Computer Replica</h2>
      <img src="assets/images/Bookcover.jpg" alt="Apple 1 Computer Replica" style="width: 300px;">
      <p>We are working on an exciting project to recreate the iconic Apple 1 computer. Our team of enthusiasts is meticulously replicating the original design and components, ensuring an authentic experience for tech history enthusiasts.</p>
      <p>Stay tuned for updates on our progress and unveilings!</p>
    </article>
    
    <!-- Project 2: Rocket X Model Project -->
    <article class="project-article">
      <h2>Rocket X Model Project</h2>
      <img src="assets/images/Bookcover.jpg" alt="Rocket X Model Project" style="width: 300px;">
      <p>Blast off into the world of space exploration with our Rocket X model project! We are engineering a detailed and realistic rocket model that captures the essence of space travel. This hands-on project is perfect for aspiring astronauts and aerospace enthusiasts.</p>
      <p>Get ready to launch your imagination!</p>
    </article>
    
    <article class="project-article">
  <h2>Apple X Frames - Frame Design</h2>
  <img src="assets/images/Bookcover.jpg" alt="Apple X Frames - Frame Design" style="width: 300px;">
  <p>Introducing Apple X Frames, a revolutionary collection of frame artworks. Each frame is designed with precision and creativity, breaking down the components and arranging them on a blueprint-like map. This unique approach adds a new dimension to traditional frame design.</p>
  <p>Discover a masterpiece that is more than meets the eye!</p>
  </article>


    <!-- Project 4: University Students' Guide Book -->
      <article class="project-article">
      <h2>University Students' Guide Book</h2>
      <img src="assets/images/Bookcover.jpg" alt="University Students' Guide Book" style="width: 300px;">
      <p>Empowering the next generation of computer science professionals, we are crafting a comprehensive guide book for university students. This book covers a wide range of topics, from programming languages to industry insights, to help students excel in their studies and future careers.</p>
      <p>Your success story begins with the turn of a page!</p>
    </article>
    
    <!-- Add more project articles here -->
    <!-- Example: -->
    <!-- <article class="project-article">
      <h2>Project Title</h2>
      <img src="assets/images/project_image.jpg" alt="Project Title">
      <p>Project details...</p>
    </article> -->
  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
 <!-- JQuery, social media icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <script src="assets/js/scripts.js"></script>
</body>

</html>
