<!--Jonatan Rassekhnia 
Professor Susan.F
Luleå Tech. University 
2023-07 
-->





<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

$topics = selectAll('topics');
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

  <title>Your Page Title | 0.1.johnny</title>
</head>

<body>
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content">
          <h1 class="page-title">Your Page Title</h1>

          <div class="page-content">
            <!-- Your content for the new page goes here -->

            <!-- Example content -->
            <p>This is the content for your new page.</p>

            <!-- FAQ Section -->
            <div class="section faq">
              <h2 class="section-title">Frequently Asked Questions</h2>
              <div class="faq-item">
                <h3 class="faq-question">Question 1: What is a FAQ?</h3>
                <p class="faq-answer">Answer 1: FAQ stands for Frequently Asked Questions. It is a list of common questions and their corresponding answers.</p>
              </div>
              <div class="faq-item">
                <h3 class="faq-question">Question 2: How can I add a FAQ section to my website?</h3>
                <p class="faq-answer">Answer 2: You can add a FAQ section by creating HTML elements for each question and answer pair.</p>
              </div>
              <!-- Add more FAQ items here -->
            </div>
            <!-- // FAQ Section -->
          </div>
        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar">
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


 <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>
