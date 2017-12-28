<?php
//My code is based on lab 12
session_start();
$fullName = $_SESSION['fullName'];
unset($_SESSION['fullName']);
$userMail= $_SESSION['userMail'];
unset($_SESSION['userMail']);
$userPhone= $_SESSION['userPhone'];
unset($_SESSION['userPhone']);
$year= $_SESSION['year'];
unset($_SESSION['year']);
$interest= $_SESSION['interest'];
unset($_SESSION['interest']);
$time= $_SESSION['time'];
unset($_SESSION['time']);
$reason= $_SESSION['reason'];
unset($_SESSION['reason']);
$rec= $_SESSION['rec'];
unset($_SESSION['rec']);
$transp= $_SESSION['transp'];
unset($_SESSION['transp']);
$other= $_SESSION['other'];
unset($_SESSION['other']);
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
        <h2>Mentee Application Form</h2>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
          </label>
          <p><?php echo(htmlspecialchars($fullName)); ?></p>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
          </label>
          <p><?php echo(htmlspecialchars($userMail)); ?></p>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <p><?php echo(htmlspecialchars($userPhone)); ?></p>
        </div>
        <!-- year -->
        <div>
          <label> <span> Year in High School: </span>
          </label>
          <p><?php echo(htmlspecialchars($year)); ?></p>
        </div>
        <!-- time -->
        <div>
          <label> <span> How often are you interested in meeting with your mentor? </span>
          </label>
          <p><?php echo(htmlspecialchars($time)); ?></p>
        </div>
        <!-- Interest -->
        <div>
          <label> <span> Field of Interest </span>
          </label>
          <p><?php echo(htmlspecialchars($interest)); ?></p>
        </div>
        <!-- Reason -->
        <div>
          <label> <span> Why do you want to perform research? What are your goals within CURB's Young Researchers
            Program? </span>
          </label>
          <p><?php echo(htmlspecialchars($reason)); ?></p>
        </div>

        <!-- recommendation -->
        <div>
          <label> <span> Please have a teacher or counselor email us one letter of recommendation
            with the file name "lastname_recommendation" and your full name as the subject line to
            curboutreach@cornell.edu. This letter will help us understand your commitment and personality
            through someone else's perspective. </span>
          </label>
          <p><?php echo(htmlspecialchars($rec)); ?></p>
        </div>

        <!-- transportation -->
        <div>
          <label> <span> Are there any potential transportation conflicts? If so, please explain. </span>
          </label>
          <p><?php echo(htmlspecialchars($transp)); ?></p>
        </div>

        <!-- other -->
        <div>
          <label> <span> Is there anything else you would like us to know about you? </span>
          </label>
          <p><?php echo(htmlspecialchars($other)); ?></p>
        </div>

      </fieldset>
    </section>
    </form>
  </article>

  <?php include("includes/footer.php"); ?>

</body>

</html>
