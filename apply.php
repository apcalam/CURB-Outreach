<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cornell YRP</title>
  <link rel="stylesheet" type="text/css" href="./style/all.css" media="all"/>
</head>

<body id = "home">
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>
  <!--Header to be made with PHP-->

  <article>
    <!--Page Title-->
    <h2 class = "heading1">Apply</h2>

    <!--Information Source: http://curboutreach.wixsite.com/researchprogram/apply-1-->

    <!--Mentor application picture, description, and link-->
    <div class="mentor">
      <!--Image Source:
      https://www.facebook.com/cornellcurb/photos/a.943472522390945.1073741830.392933844111485/943472612390936/?type=3&theater-->
      <img src ="images/mentor.jpg" alt="Picture of Mentor Meet and Greet"/>
      <h4 class = "heading2">I'm Interested in Becoming a Mentor</h4>
      <p class = "about">Looking to mentor high school students and foster a passion for inquiry? Apply today!
      <a href="mentorapp.php">Apply Now</a></p>
    </div>

    <!--Mentee application picture, description, and link-->
    <div class="mentee">
      <!--Image Source:
      https://repairman.files.wordpress.com/2009/12/general_classroom_6.jpg-->
      <img src ="images/mentee.jpg" alt="Picture of a classroom"/>
      <h4 class = "heading2">I'm Interested in Becoming a Mentee</h4>
      <p class = "about">Looking to be mentored by Cornell University's undergraduate and graduate students who are engaged
      in groundbreaking research in all fields? Apply today!
      <a href="menteeapp.php">Apply Now</a></p>
    </div>

  </article>

  <?php include("includes/footer.php"); ?>
</body>

</html>
