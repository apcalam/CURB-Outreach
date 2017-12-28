<?php
  $submit = $_REQUEST["submit"];
  // Stores the name of the class for hidden error messages
  $HIDDEN_ERROR_CLASS = "errorHidden";
  if (isset($submit)) {
    $fullName = $_REQUEST["fullName"];
    $userMail = $_REQUEST["userMail"];
    $phoneNum = $_REQUEST["phoneNum"];
    $year = $_REQUEST["year"];
    $time = $_REQUEST["time"];
    $interest = $_REQUEST["interest"];
    $reason = $_REQUEST["reason"];
    $rec = $_REQUEST["rec"];
    $transp = $_REQUEST["transp"];
    $other = $_REQUEST["other"];

    if( !empty($fullName) ) {
      $fullNameValid = true;
    } else {
      $fullNameValid = false;
    }
    if( !empty($userMail) && filter_var($userMail, FILTER_VALIDATE_EMAIL)) {
      $userMailValid = true;
    } else {
      $userMailValid = false;
    }
    if( !empty($year) ) {
      $yearValid = true;
    } else {
      $yearValid = false;
    }
    if( !empty($time) ) {
      $timeValid = true;
    } else {
      $timeValid = false;
    }
    if( !empty($interest) ) {
      $interestValid = true;
    } else {
      $interestValid = false;
    }
    if( !empty($reason) ) {
      $reasonValid = true;
    } else {
      $reasonValid = false;
    }
    if( !empty($rec) ) {
      $recValid = true;
    } else {
      $recValid = false;
    }

    $formValid = $fullNameValid && $userMailValid && $yearValid && $interestValid
    && $timeValid && $reasonValid && $recValid;

    if ($formValid) {
      session_start();
      $_SESSION["fullName"] = $fullName;
      $_SESSION["userMail"] = $userMail;
      $_SESSION["userPhone"] = $userPhone;
      $_SESSION["year"] = $year;
      $_SESSION["time"] = $time;
      $_SESSION["interest"] = $interest;
      $_SESSION["reason"] = $reason;
      $_SESSION["rec"] = $rec;
      $_SESSION["transp"] = $transp;
      $_SESSION["other"] = $other;
      header("Location: menteeresponse.php");
      return;
    }
  } else {
    $fullNameValid = true;
    $userMailValid = true;
    $yearValid = true;
    $timeValid = true;
    $interestValid = true;
    $reasonValid = true;
    $recValid = true;
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
    <h2 class = "heading1">Highschool Mentee Application</h2>
    <form method="post" id="menteeForm" action="menteeapp.php" novalidate class = "about">
    <section>
      <fieldset>
        <h2>Mentee Application Form</h2>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="fullName" value="<?php echo($fullName);?>" placeholder="John Doe" name="fullName" required/>
          <span class="errorContainer <?php if ($fullNameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="fullNameError">
            Name Required.
          </span>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="email" id="userMail" value="<?php echo($userMail);?>"
          placeholder="name@domain.com" name="userMail" required/>
          <span class="errorContainer <?php if ($userMailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="userMailError">
            Valid email required.
          </span>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <input type="tel" id="userPhone" value="<?php echo($userPhone);?>" placeholder="(xxx)xxx xxxx" name="userPhone"/>
        </div>

        <!-- year -->
        <div id="yearMentee">
          <legend><span>Year in High School </span><strong><abbr title="required">*</abbr></strong>
            <span class="errorContainer <?php if ($yearValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="yearMenteeError">
              Please select Year.
            </span>
          </legend>
          <input type="radio" name="year" id = "y2" value="Sophomore"
          <?php if ( $year == "Sophomore" ) { echo ("checked"); } ?>> Sophomore <br>
          <input type="radio" name="year" id = "y3" value="Junior"
          <?php if ( $year == "Junior" ) { echo ("checked"); } ?>> Junior <br>
          <input type="radio" name="year" id = "y4" value="Senior"
          <?php if ( $year == "Senior" ) { echo ("checked"); } ?>> Senior <br>
        </div>
        <!-- time -->
        <div id="timeMentee">
          <legend>
            <span>How often are you interested in meeting with your mentor? </span><strong><abbr title="required">*
            </abbr></strong>
            <span class="errorContainer <?php if ($timeValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="timeMenteeError">
              Please select a time to meet.
            </span>
          </legend>
          <input type="radio" name="time" id = "t1" value="Once every two weeks"
          <?php if ( $time == "Once every two weeks" ) { echo ("checked"); } ?>> Once every two weeks <br>
          <input type="radio" name="time" id = "t2" value="Once every week"
          <?php if ( $time == "Once every week" ) { echo ("checked"); } ?>> Once every week <br>
          <input type="radio" name="time" id = "t3" value="Twice a week"
          <?php if ( $time == "Twice a week" ) { echo ("checked"); } ?>> Twice a week <br>
          <input type="radio" name="time" id = "t4" value="Three times a week"
          <?php if ( $time == "Three times a week" ) { echo ("checked"); } ?>> Three times a week <br>
          <input type="radio" name="time" id = "t5" value="Four times a week"
          <?php if ( $time == "Four times a week" ) { echo ("checked"); } ?>> Four times a week <br>
        </div>
        <!-- interest -->
        <div id="interest">
          <legend><span>Field of Interest </span><strong><abbr title="required">*</abbr></strong>
            <span class="errorContainer <?php if ($interestValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="interestError">
            Please select a field of interest.
            </span>
          </legend>
          <input type="radio" name="interest" id = "i1" value="Molecular and Cell Biology"
          <?php if ( $interest == "Molecular and Cell Biology" ) { echo ("checked"); } ?>> Molecular and Cell Biology <br>
          <input type="radio" name="interest" id = "i2" value="Neurobiology and Behavior"
          <?php if ( $interest == "Neurobiology and Behavior" ) { echo ("checked"); } ?>> Neurobiology and Behavior <br>
          <input type="radio" name="interest" id = "i3" value="Genetics, Genomics, and Development"
          <?php if ( $interest == "Genetics, Genomics, and Development" ) { echo ("checked"); } ?>>
          Genetics, Genomics, and Development <br>
          <input type="radio" name="interest" id = "i4" value="Human Nutrition"
          <?php if ( $interest == "Human Nutrition" ) { echo ("checked"); } ?>> Human Nutrition <br>
          <input type="radio" name="interest" id = "i5" value="Ecology and Evolutionary Biology"
          <?php if ( $interest == "Ecology and Evolutionary Biology" ) { echo ("checked"); } ?>>
          Ecology and Evolutionary Biology <br>
          <input type="radio" name="interest" id = "i6" value="Insect Biology"
          <?php if ( $interest == "Insect Biology" ) { echo ("checked"); } ?>> Insect Biology <br>
          <input type="radio" name="interest" id = "i7" value="Marine Biology"
          <?php if ( $interest == "Marine Biology" ) { echo ("checked"); } ?>> Marine Biology <br>
          <input type="radio" name="interest" id = "i8" value="Chemistry"
          <?php if ( $interest == "Chemistry" ) { echo ("checked"); } ?>> Chemistry <br>
          <input type="radio" name="interest" id = "i9" value="Physics"
          <?php if ( $interest == "Physics" ) { echo ("checked"); } ?>> Physics <br>
          <input type="radio" name="interest" id = "i10" value="Biomedical Engineering"
          <?php if ( $interest == "Biomedical Engineering" ) { echo ("checked"); } ?>> Biomedical Engineering <br>
          <input type="radio" name="interest" id = "i11" value="Biological and Environmental Engineering
          <?php if ( $interest == "Biological and Environmental Engineering" ) { echo ("checked"); } ?>">
          Biological and Environmental Engineering<br>
          <input type="radio" name="interest" id = "i12" value="Chemical Engineering"
          <?php if ( $interest == "Chemical Engineering" ) { echo ("checked"); } ?>> Chemical Engineering <br>
          <input type="radio" name="interest" id = "i13" value="Electrical and Computer Engineering"
          <?php if ( $interest == "Electrical and Computer Engineering" ) { echo ("checked"); } ?>>
          Electrical and Computer Engineering <br>
          <input type="radio" name="interest" id = "i14" value="Mechanical Engineering"
          <?php if ( $interest == "Mechanical Engineering" ) { echo ("checked"); } ?>> Mechanical Engineering <br>
          <input type="radio" name="interest" id = "i15" value="Psychology"
          <?php if ( $interest == "Psychology" ) { echo ("checked"); } ?>> Psychology <br>
          <input type="radio" name="interest" id = "i16" value="Economics"
          <?php if ( $interest == "Economics" ) { echo ("checked"); } ?>> Economics <br>
          <input type="radio" name="interest" id = "i17" value="Global and Public Health"
          <?php if ( $interest == "Global and Public Health" ) { echo ("checked"); } ?>> Global and Public Health <br>
          <input type="radio" name="interest" id = "i18" value="Fiber Science and Apparel Design"
          <?php if ( $interest == "Fiber Science and Apparel Design" ) { echo ("checked"); } ?>>
          Fiber Science and Apparel Design <br>
        </div>

        <!-- Reason -->
        <div>
          <label> <span> Why do you want to perform research? What are your goals within CURB's Young Researchers
            Program? </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <span class="errorContainer <?php if ($reasonValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="reasonError">
            Response required.
          </span>
          <br/>
          <textarea id="reason"
          name="reason" placeholder="I want to perform resarch because.." required><?php echo($reason);?></textarea>
        </div>

        <!-- recommendation -->
        <div>
          <label> <span> Please have a teacher or counselor email us one letter of recommendation
            with the file name "lastname_recommendation" and your full name as the subject line to
            curboutreach@cornell.edu. This letter will help us understand your commitment and personality
            through someone else's perspective. </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <span class="errorContainer <?php if ($recValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="recError">
            Response required.
          </span>
          <br/>
          <textarea id="rec"
          name="rec"
          placeholder="Name of recommender,relationship to student, recommender's email address"
          required><?php echo($rec);?></textarea>
        </div>

        <!-- transportation -->
        <div>
          <label> <span> Are there any potential transportation conflicts? If so, please explain. (optional)</span>
          </label>
          <br/>
          <textarea id="transp" name="transp" placeholder="Yes, because..." required><?php echo($transp);?></textarea>
          </textarea>
        </div>

        <!-- other -->
        <div>
          <label> <span> Is there anything else you would like us to know about you? (optional)</span>
          </label>
          <br/>
          <textarea id="other" name="other" placeholder="Your message..."><?php echo($other);?></textarea>
          </textarea>
        </div>

        <p>Required Field - * </p> <br/>
        <button type="submit" name = "submit" id="submit">Submit</button>
      </fieldset>
    </section>
    </form>
  </article>

  <?php include("includes/footer.php"); ?>

</body>

</html>
