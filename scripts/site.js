$(document).ready(function () {

  //Toggle to show/hide information. Based off of Professor Harms's lecutre on jquery.
  $("#click1").click(function(){
    $("#clickMore1").toggle();
  });

  $("#click2").click(function(){
    $("#clickMore2").toggle();
  });

  $("#click3").click(function(){
    $("#clickMore3").toggle();
  });

  $("#click4").click(function(){
    $("#clickMore4").toggle();
  });

  $("#click5").click(function(){
    $("#clickMore5").toggle();
  });

  $("#click6").click(function(){
    $("#clickMore6").toggle();
  });

  $("#click7").click(function(){
    $("#clickMore7").toggle();
  });

  //Slideshow on index.php. Based off of code from W3Schools. We learned
  //how to create a caroursel using jQuery and be able to change the
  //images depending on the time:
  //https://www.w3schools.com/w3css/w3css_slideshow.asp

  //All images in the slideshow are from the CURB Facebook page:
  //https://www.facebook.com/pg/cornellcurb/photos/?ref=page_internal

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

  //Contact form on contact.php.
  $("#contactForm").on("submit", function() {
    var form1Valid = true;
    var nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
      $("#nameError").hide();
    } else {
      //console.log('fail');
      $("#nameError").show();
      form1Valid = false;
    }

    var emailIsValid = $("#mail").prop("validity").valid;
    if(emailIsValid) {
      $("#mailError").hide();
    } else {
      $("#mailError").show();
      form1Valid = false;
    }

    var messageIsValid = $("#message").prop("validity").valid;
    if(messageIsValid) {
      $("#msgError").hide();
    } else {
      $("#msgError").show();
      form1Valid = false;
    }
    return form1Valid;
  });

  //Mentor Application form on mentorapp.php
  $("#mentorForm").on("submit", function() {
    var formValid = true;
    var nameIsValid = $("#fname").prop("validity").valid;
    if(nameIsValid) {
      $("#fnameError").hide();
    } else {
      $("#fnameError").show();
      formValid = false;
    }

    var emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      formValid = false;
    }

    var majMinValid = $("#majMin").prop("validity").valid;
    if(majMinValid) {
      $("#majMinError").hide();
    } else {
      $("#majMinError").show();
      formValid = false;
    }

    var collegeValid = $("#college").prop("validity").valid;
    if(collegeValid) {
      $("#collegeError").hide();
    } else {
      $("#collegeError").show();
      formValid = false;
    }

    var labValid = $("#lab").prop("validity").valid;
    if(labValid) {
      $("#labError").hide();
    } else {
      $("#labError").show();
      formValid = false;
    }

    var areaValid = $("#area").prop("validity").valid;
    if(areaValid) {
      $("#areaError").hide();
    } else {
      $("#areaError").show();
      formValid = false;
    }

    var whyValid = $("#why").prop("validity").valid;
    if(whyValid) {
      $("#whyError").hide();
    } else {
      $("#whyError").show();
      formValid = false;
    }

    var expValid = $("#exp").prop("validity").valid;
    if(expValid) {
      $("#expError").hide();
    } else {
      $("#expError").show();
      formValid = false;
    }

    var yearValid = $("#year").prop("checked", true);
    if(yearValid) {
        $("#yearError").hide();
      } else {
        $("#yearError").show();
        formValid = false;
    }

    var timeValid = $("#time").prop("checked", true);
    if(timeValid) {
        $("#timeError").hide();
      } else {
        $("#timeError").show();
        formValid = false;
    }

    var roleValid = $("#role").prop("checked", true);
    if(roleValid) {
        $("#roleError").hide();
      } else {
        $("#roleError").show();
        formValid = false;
    }

    return formValid;
  });

  //Mentee Application form on menteeapp.php
  $("#menteeForm").on("submit", function() {

    var form2Valid = true;

    var nameIsValid = $("#fullName").prop("validity").valid;
    if(nameIsValid) {
      $("#fullNameError").hide();
    } else {
      $("#fullNameError").show();
      formV2alid = false;
    }

    var emailIsValid = $("#userMail").prop("validity").valid;
    if(emailIsValid) {
      $("#userMailError").hide();
    } else {
      $("#userMailError").show();
      form2Valid = false;
    }

    var reasonValid = $("#reason").prop("validity").valid;
    if(reasonValid) {
      $("#reasonError").hide();
    } else {
      $("#reasonError").show();
      form2Valid = false;
    }

    var recValid = $("#rec").prop("validity").valid;
    if(labValid) {
      $("#recError").hide();
    } else {
      $("#recError").show();
      form2Valid = false;
    }

    var yearMenteeValid = $("#yearMentee").prop("checked", true);
    if(yearMenteeValid) {
        $("#yearMenteeError").hide();
      } else {
        $("#yearMenteeError").show();
        formValid2 = false;
    }

    var timeMenteeValid = $("#timeMentee").prop("checked", true);
    if(timeMenteeValid) {
        $("#timeMenteeError").hide();
      } else {
        $("#timeMenteeError").show();
        formValid2 = false;
    }

    var interestValid = $("#interest").prop("checked", true);
    if(interestValid) {
        $("#interestError").hide();
      } else {
        $("#interestError").show();
        formValid2 = false;
    }

    return form2Valid;
  });

});
