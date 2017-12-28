<?php
//My code is based on lab 12
session_start();
$name = $_SESSION['name'];
unset($_SESSION['name']);
$mail= $_SESSION['mail'];
unset($_SESSION['mail']);
$phone= $_SESSION['phone'];
unset($_SESSION['phone']);
$message= $_SESSION['message'];
unset($_SESSION['message']);

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
    <form method="post" id="contactForm" action="submission.php" novalidate>
    <section>
      <fieldset>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
          </label>
          <p><?php echo(htmlspecialchars($name)); ?></p>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
          </label>
          <p><?php echo(htmlspecialchars($mail)); ?></p>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <p><?php echo(htmlspecialchars($phone)); ?></p>
        </div>
        <!-- Message -->
        <div>
          <label><span> Message:</span>
          </label>
          <p><?php echo(htmlspecialchars($message)); ?></p>
        </div>
      </fieldset>
    </section>
    </form>
  </article>


</body>

</html>
