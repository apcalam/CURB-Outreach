<?php
  //This code is based on lab 12
  $submit = $_REQUEST["submit"];
  // Stores the name of the class for hidden error messages
  $HIDDEN_ERROR_CLASS = "errorHidden";
  if (isset($submit)) {
    $name = $_REQUEST["name"];
    $mail = $_REQUEST["mail"];
    $phone = $_REQUEST["phone"];
    $message = $_REQUEST["message"];

    if( !empty($name) ) {
      // the first name field is valid
      $nameValid = true;
    } else {
      // the first name field is not valid
      $nameValid = false;
    }
    if( !empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      // the email field is valid
      $mailValid = true;
    } else {
      // the email field is not valid
      $mailValid = false;
    }
    if( !empty($message) ) {
      // the last name field is valid
      $messageValid = true;
    } else {
      // the last name field is not valid
      $messageValid = false;
    }
    $formValid = $nameValid && $mailValid && $messageValid;
    // if valid, allow submission
    if ($formValid) {
      // redirect to formSubmitted.php
      session_start();
      $_SESSION["name"] = $name;
      $_SESSION["mail"] = $mail;
      $_SESSION["phone"] = $phone;
      $_SESSION["message"] = $message;
      header("Location: submission.php");
      return;
    }
  } else {
    $nameValid = true;
    $mailValid = true;
    $messageValid = true;
  }
?>
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
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <article>
    <h2 class = "heading1">Contact Us</h2>
    <form method="post" id="contactForm" action="contact.php" novalidate>
    <section>
      <fieldset>
        <h2>Contact Form</h2>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="name" value="<?php echo($name);?>" placeholder="John Doe" name="name" required/>
          <span class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
            Name Required.
          </span>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="email" id="mail" value="<?php echo($mail);?>" placeholder="name@domain.com" name="mail" required/>
          <span class="errorContainer <?php if ($mailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="mailError">
            Valid email required.
          </span>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <input type="tel" id="phone" value="<?php echo($phone);?>" placeholder="(xxx)xxx xxxx" name="phone"/>
        </div>
        <!-- Message -->
        <div>
          <label><span> Message:</span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <span class="errorContainer <?php if ($messageValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="msgError">
            Message required.
          </span>
          <br/>
          <textarea id="message" name="message" value="<?php echo($message);?>"
            placeholder="Your Message.." required></textarea>
          </textarea>
        </div>
        <button type="submit" name="submit">Submit</button>
      </fieldset>
    </section>
    </form>
  </article>

  <?php include("includes/footer.php"); ?>

</body>

</html>
