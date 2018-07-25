# CURB-Outreach
My final project for my class Introduction to Design and Programming for the Web. This the unoffical website for the Cornell University Research Board Outreach. It is responsive so it can be viewed on a laptop, tablet, or phone. 

## Home
An overview of the club's outreach program. There is a carousel of images of the club's outreach program. Here is javascript for the carousel. 
```
  var currentImageIndex = 0;
  carousel();

  function carousel() {
      var i;
      var images = document.getElementsByClassName("current_img");
      var FIRST_IMAGE_INDEX = 1;
      var LAST_IMAGE_INDEX = images.length;
      for (i = 0; i < LAST_IMAGE_INDEX; i++) {
         images[i].style.display = "none";
      }
      currentImageIndex++;
      if (currentImageIndex > LAST_IMAGE_INDEX) {
        currentImageIndex = FIRST_IMAGE_INDEX
      }
      images[currentImageIndex-1].style.display = "block";
      setTimeout(carousel, 3000);
  }
```
## About
In depth description of the club and their outreach program

## Apply
The club's outreach program is a mentorship program where Cornell students mentor high school students. Cornell students can apply to be a mentor while high school students can apply to be a mentee. Both applications look similar. On both applications I used both client side and server side form validation using both javascript and PHP. I'd like to highlight my PHP code from the mentor application: 

```
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
```
## Events
Description of the events the club's outreach program holds. Each event has a picture and name and you have to click for more information. I used javascript to toggle the information. I'd like to highlight by javascript. 

```
  $("#click1").click(function(){
    $("#clickMore1").toggle();
  });
```

## Team
Description of the board members of the club's outreach program. Each board member has a picture, name, and title and you have to click for more information. I used javascript to toggle the information.

## Contact Form
Allows people to contact the club on the website. The form uses both server side and client side validation with javascript and PHP. 

