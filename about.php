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
    <h2 class = "heading1">About Us</h2>

    <!--Basic description of CURB Outreach-->
    <div>
      <!--Image Source:
      https://www.facebook.com/cornellcurb/photos/a.392935267444676.88811.392933844111485/626077597463774/?type=1&theater-->
      <img src ="images/aboutus.jpg" alt="Picture of Symposium"/>
      <p class = "about">CURB’s Outreach Committee has established the Young Researchers Program for high school students
        to be individually matched with an undergraduate or graduate student-mentor. This shadowing program
        is designed so that for a few hours a month, a younger student will either observe, assist experimental
        procedures, assist in data collection, and/or assist in data analysis. This program is designed to
        minimize disturbance to your normal work-day: no extra planning, no balancing extra projects, and no
        designing additional experiments. You stick to your schedule and the experiments you have planned and
        explain what you're doing as you go and why to the shadowing student. Ultimately, you give high school
        students exposure to university-level research and introduce them to science in ways unseen within the
        classroom.</p>
    </div>

    <!--Overview of the mentorship program-->
    <div>
      <!--Image Source:
      https://www.facebook.com/cornellcurb/photos/
      a.943472522390945.1073741830.392933844111485/943472702390927/?type=3&theater-->
      <img src ="images/program.jpg" alt="Mentor and Mentee Meet and Greet"/>
      <h4 class  = "heading2">Program Overview</h4>
      <p class = "about">Students will be individually matched with an undergraduate or graduate student-mentor.
        The student will either observe, assist with experimental procedures, assist in data collection, or assist in data
        analysis. The student will work in the lab at least once per week. The specific date and time will be unique to each
        student-mentor pair. Upon completion of the program, the students will create a scientific poster and present
        their work at our symposium.</p>
    </div>

    <!--Overview of the application process to become a mentor or mentee-->
    <div>
      <!--Image Source:
      http://fishbowl.wpengine.netdna-cdn.com/wp-content/uploads/2012/05/college-applications.jpg-->
      <img src ="images/applications.jpg" alt="Application Process"/>
      <h4 class  = "heading2">Application Process</h4>
      <p class = "about"><em>Mentors:</em> Learn more about what it means to be a mentor <a href="apply.php">here</a>
       and apply online <a href="mentorapp.php">here</a></p>
      <p class = "about"><em>Mentees:</em> Learn more about what it means to be a mentee <a href="apply.php">here</a>
        and apply online <a href="menteeapp.php">here</a></p>
    </div>

  </article>

  <?php include("includes/footer.php"); ?>


</body>

</html>
