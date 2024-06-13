<!--Jonatan Rassekhnia 
Professor Susan.F
Luleå Tech. University 
2023-07 
-->

<?php
// Include the file that defines the ROOT_PATH constant
include("path.php");

// Include the posts controller for handling post-related operations
include(ROOT_PATH . '/app/controllers/posts.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
  // Retrieve a single post from the 'posts' table based on the provided 'id'
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

// Retrieve all topics from the 'topics' table
$topics = selectAll('topics');

// Retrieve all published posts from the 'posts' table
$posts = selectAll('posts', ['published' => 1]);
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
  <title><?php echo $post['title']; ?> | 01.Johnny</title>
</head>
<body>
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <!-- Content -->
    <div class="content clearfix">
      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?></h1>
          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>

        </div>
      </div>
      <!-- // Main Content -->
      <!-- Sidebar -->
      <div class="sidebar single">
        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <?php foreach ($posts as $p): ?>
            <div class="post clearfix">
              <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
              <a href="" class="title">
                <h4><?php echo $p['title'] ?></h4>
              </a>
            </div>
          <?php endforeach; ?>

        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $topic): ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>

          </ul>
        </div>
      </div>
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
 <!-- JQuery, social media icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
 <!--The Slick Carousel library is commonly used to create image sliders (or carousels) that allow you to display a series of images horizontally or vertically on a webpage-->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <!-- JQuery, social media icons -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>
