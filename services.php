<!--Jonatan Rassekhnia 
Professor Susan.F
Luleå Tech. University 
2023-07 
-->



<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');
?>

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

  <title>Our Services</title>
</head>

<body>
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="page-wrapper">
    <div class="content">
      <h1>Our Services</h1>
      <p>We offer a range of services to cater to your needs. Our experienced team is committed to delivering high-quality
        solutions to help you achieve your goals. Explore our services and let us know how we can assist you.</p>
      
      <h2>Our Services Include:</h2>
      <ul>
        <li>Content Creation</li>
        <li>Website Design and Development</li>
        <li>Digital Marketing</li>
        <li>Graphic Design</li>
        <li>Consulting and Strategy</li>
      </ul>
    </div>
  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


<!-- JQuery, social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

 <!-- Custom Script -->
 <script src="assets/js/scripts.js"></script>
 </body>
</html>
