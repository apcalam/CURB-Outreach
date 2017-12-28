<?php
session_start();
$fname = $_SESSION['fname'];
unset($_SESSION['fname']);
$email= $_SESSION['email'];
unset($_SESSION['email']);
$phoneNum= $_SESSION['phoneNum'];
unset($_SESSION['phoneNum']);
$majMin = $_SESSION['majMin'];
unset($_SESSION['majMin']);
$college= $_SESSION['college'];
unset($_SESSION['college']);
$lab = $_SESSION['lab'];
unset($_SESSION['lab']);
$year= $_SESSION['year'];
unset($_SESSION['year']);
$role= $_SESSION['role'];
unset($_SESSION['role']);
$time= $_SESSION['time'];
unset($_SESSION['time']);
$area= $_SESSION['area'];
unset($_SESSION['area']);
$why= $_SESSION['why'];
unset($_SESSION['why']);

?>
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

  <article>
    <h2 class = "heading1">YOUR FORM HAS BEEN SUBMITTED</h2>
    <form class="about">
    <section>
      <fieldset>
        <h2>Mentor Application Form</h2>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
          </label>
          <p><?php echo(htmlspecialchars($fname)); ?></p>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
          </label>
          <p><?php echo(htmlspecialchars($email)); ?></p>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <p><?php echo(htmlspecialchars($phoneNum)); ?></p>
        </div>
        <!-- Major/Minor -->
        <div>
          <label><span> Major/Minor: </span>
          </label>
          <p><?php echo(htmlspecialchars($majMin)); ?></p>
        </div>
        <!-- College-->
        <div>
          <label><span> College: </span>
          </label>
          <p><?php echo(htmlspecialchars($college)); ?></p>
        </div>
        <!-- lab location -->
        <div>
          <label> <span> What lab and building do you work in? </span>
          </label>
          <p><?php echo(htmlspecialchars($lab)); ?></p>
        </div>
        <!-- year -->
        <div>
          <label> <span> Year in College: </span>
          </label>
          <p><?php echo(htmlspecialchars($year)); ?></p>
        </div>
        <!-- role -->
        <div>
          <label> <span> Please describe what role your mentee will have throughout the duration of the program </span>
          </label>
          <p><?php echo(htmlspecialchars($role)); ?></p>
        </div>
        <!-- time -->
        <div>
          <label> <span> How often are you interested in meeting with your mentee? </span>
          </label>
          <p><?php echo(htmlspecialchars($time)); ?></p>
        </div>
        <!-- area -->
        <div>
          <label> <span> Research Area and a brief explaination of the research topic </span>
          </label>
          <p><?php echo(htmlspecialchars($area)); ?></p>
        </div>
        <!-- why -->
        <div>
          <label> <span>Why are you interested in mentoring students? </span>
          </label>
          <p><?php echo(htmlspecialchars($why)); ?></p>
        </div>
        </fieldset>
      </fieldset>
    </section>
    </form>
  </article>

  <?php include("includes/footer.php"); ?>

</body>

</html>
