<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cornell YRP</title>
  <link rel="stylesheet" type="text/css" href="./style/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
</head>

<body id = "home">
  <?php include "includes/header.php"; ?>
  <?php include("includes/navigation.php"); ?>
    <h2 class = "heading1">Cornell Young Researcher's Program</h2>

    <!-- All images in the slideshow are from the CURB Facebook page:
    https://www.facebook.com/pg/cornellcurb/photos/?ref=page_internal-->
    <div id="slide">

      <div id="image_slides">
        <img class="current_img" src="images/slide1.jpg" alt="slideshow images">
        <img class="current_img" src="images/slide2.jpg" alt="slideshow images">
        <img class="current_img" src="images/slide3.jpg" alt="slideshow images">
        <img class="current_img" src="images/slide4.jpg" alt="slideshow images">
      </div>

    </div>

    <div class="clear"></div>
    <br/>
    <p class = "heading2">We connect enthusiastic high school students with like-minded college students
        to foster a mentorship community of scientific research and discovery.</p>

    <div class = "heading2">

      <!--Picture and link to Team page-->
      <img src="images/meetOurTeam.jpg" alt="Meet Our Team"/>
      <a href="team.php" class="heading2">Meet Our Team</a>

      <!--Picture and link to About Us page-->
      <img src="images/about.jpg" alt="About Our Program"/>
      <a href="about.php" class = "heading2">About Our Program</a>

      <!--Picture and link to Apply page-->
      <img src="images/mentorship.jpg" alt="Apply to be Mentor or Mentee"/>
      <a href="apply.php" class = "heading2">Apply to our program</a>
    </div>

  <?php include("includes/footer.php"); ?>
</body>

</html>
