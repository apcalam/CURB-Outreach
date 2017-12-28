<?php
  //This code is based on lab 12
  $submit = $_REQUEST["submit"];
  // Stores the name of the class for hidden error messages
  $HIDDEN_ERROR_CLASS = "errorHidden";
  if (isset($submit)) {
    $fname = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    $phoneNum = $_REQUEST["phoneNum"];
    $majMin = $_REQUEST["majMin"];
    $college = $_REQUEST["college"];
    $lab = $_REQUEST["lab"];
    $year = $_REQUEST["year"];
    $role = $_REQUEST["role"];
    $time = $_REQUEST["time"];
    $area = $_REQUEST["area"];
    $why = $_REQUEST["why"];

    if( !empty($fname) ) {
      $fnameValid = true;
    } else {
      $fnameValid = false;
    }
    if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailValid = true;
    } else {
      $emailValid = false;
    }
    if( !empty($majMin) ) {
      $majMinValid = true;
    } else {
      $majMinValid = false;
    }
    if( !empty($college) ) {
      $collegeValid = true;
    } else {
      $collegeValid = false;
    }
    if( !empty($lab) ) {
      $labValid = true;
    } else {
      $labValid = false;
    }
    if( !empty($year) ) {
      $yearValid = true;
    } else {
      $yearValid = false;
    }
    if( !empty($role) ) {
      $roleValid = true;
    } else {
      $roleValid = false;
    }
    if( !empty($time) ) {
      $timeValid = true;
    } else {
      $timeValid = false;
    }
    if( !empty($area) ) {
      $areaValid = true;
    } else {
      $areaValid = false;
    }
    if( !empty($why) ) {
      $whyValid = true;
    } else {
      $whyValid = false;
    }
    $formValid = $fnameValid && $emailValid && $majMinValid && $collegeValid && $labValid
    && $yearValid && $roleValid && $timeValid && $areaValid && $whyValid;

    if ($formValid) {
      // redirect to formSubmitted.php
      session_start();
      $_SESSION["fname"] = $fname;
      $_SESSION["email"] = $email;
      $_SESSION["phoneNum"] = $phoneNum;
      $_SESSION["majMin"] = $majMin;
      $_SESSION["college"] = $college;
      $_SESSION["lab"] = $lab;
      $_SESSION["year"] = $year;
      $_SESSION["role"] = $role;
      $_SESSION["time"] = $time;
      $_SESSION["area"] = $area;
      $_SESSION["why"] = $why;

      header("Location: mentorresponse.php");
      return;
    }
  } else {
    $fnameValid = true;
    $emailValid = true;
    $majMinValid = true;
    $collegeValid = true;
    $labValid = true;
    $yearValid = true;
    $roleValid = true;
    $timeValid = true;
    $areaValid = true;
    $whyValid = true;

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
    <h2 class = "heading1">Mentor Application</h2>
    <form method="post" id="mentorForm" action="mentorapp.php" novalidate class = "about">
    <section>
      <fieldset>
        <h2>Mentor Application Form</h2>
        <!-- full name -->
        <div>
          <label><span> Full Name: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="fname" value="<?php echo($fname);?>" placeholder="John Doe" name="fname" required/>
          <span class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="fnameError">
            Name Required.
          </span>
        </div>
        <!-- email -->
        <div>
          <label> <span>E-mail:</span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="email" id="email" value="<?php echo($email);?>" placeholder="name@domain.com" name="email" required/>
          <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">
            Valid email required.
          </span>
        </div>
        <!-- phone -->
        <div>
          <label><span>Phone Number (optional): </span>
          </label>
          <input type="tel" id="phoneNum" value="<?php echo($phoneNum);?>" placeholder="(xxx)xxx xxxx" name="phoneNum"/>
        </div>
        <!-- Major/Minor -->
        <div>
          <label><span> Major/Minor: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="majMin" value="<?php echo($majMin);?>" placeholder="Chemistry" name="majMin" required/>
          <span class="errorContainer <?php if ($majMinValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="majMinError">
            Major/Minor Required.
          </span>
        </div>
        <!-- College-->
        <div>
          <label><span> College: </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="college" value="<?php echo($college);?>" placeholder="Arts and Sciences" name="college"
          required/>
          <span class="errorContainer <?php if ($collegeValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="collegeError">
            Name Required.
          </span>
        </div>
        <!-- lab location -->
        <div>
          <label> <span> What lab and building do you work in? </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <input type="text" id="lab" value="<?php echo($lab);?>" placeholder="Baker" name="lab" required/>
          <span class="errorContainer <?php if ($labValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="labError">
            Lab Location Required.
          </span>
        </div>

        <!-- year -->
        <div id="year">
          <legend><span>Year in College </span><strong><abbr title="required">*</abbr></strong>
            <span class="errorContainer <?php if ($yearValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="yearError">
              Please select Year.
            </span>
          </legend>
          <input type="radio" name="year" id = "y1" value="Freshman"
          <?php if ( $year == "Freshman" ) { echo ("checked"); } ?>> Freshman <br>
          <input type="radio" name="year" id = "y2" value="Sophomore"
          <?php if ( $year == "Sophomore" ) { echo ("checked"); } ?>> Sophomore <br>
          <input type="radio" name="year" id = "y3" value="Junior"
          <?php if ( $year == "Junior" ) { echo ("checked"); } ?>> Junior <br>
          <input type="radio" name="year" id = "y4" value="Senior"
          <?php if ( $year == "Senior" ) { echo ("checked"); } ?>> Senior <br>
        </div>
        <!-- time -->
        <div id="time">
          <legend>
            <span>How often are you interested in meeting with your mentee? </span><strong><abbr title="required">*
            </abbr></strong>
            <span class="errorContainer <?php if ($timeValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="timeError">
              Please select a time.
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

        <!-- role -->
        <div id="role">
          <legend><span>Please describe what role your mentee will have throughout the duration of the program </span>
            <strong><abbr title="required">*</abbr></strong>
            <span class="errorContainer <?php if ($roleValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="roleError">
              Please select a role.
            </span>
          </legend>
          <input type="radio" name="role" id = "r1" value="Observing"
          <?php if ( $role == "Observing" ) { echo ("checked"); } ?>> Observing <br>
          <input type="radio" name="role" id = "r2" value="Assisting with experimental procedure"
          <?php if ( $role == "Assisting with experimental procedure" ) { echo ("checked"); } ?>>
          Assisting with experimental procedure <br>
          <input type="radio" name="role" id = "r3" value="Assisting in data collection"
          <?php if ( $role == "Assisting in data collection" ) { echo ("checked"); } ?>> Assisting in data collection <br>
          <input type="radio" name="role" id = "r4" value="Assisting in data analysis"
          <?php if ( $role == "Assisting in data analysis" ) { echo ("checked"); } ?>> Assisting in data analysis <br>
        </div>

        <!-- area -->
        <div>
          <label> <span> Research Area and a brief explaination of the research topic </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <span class="errorContainer <?php if ($areaValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="areaError">
            Area required.
          </span>
          <br/>
          <textarea id="area" name="area" placeholder="I research.." required><?php echo($area);?></textarea>
        </div>

        <!-- why -->
        <div>
          <label> <span> Why are you interested in mentoring students? </span>
            <strong><abbr title="required">*</abbr></strong>
          </label>
          <span class="errorContainer <?php if ($whyValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="whyError">
            Reason why required.
          </span>
          <br/>
          <textarea id="why" name="why" placeholder="I would like.." required><?php echo($why);?></textarea>
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
