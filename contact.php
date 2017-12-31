<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact us - V Kanhye Health Foods</title>
  <?php include('include/header.php'); ?>
</head>
<body>
  <?php include('include/menu.php'); ?>
  <div class="templatemo_lightgrey_about" id="templatemo_about">
    <div class="container">
      <div class="templatemo_content_box">
        <h4 class="pageTitle">>> Contact us</h4>
          <!--start contact form -->
          <div class="row">
            <div class="col-xs-4">
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" required="true" class="form-control" name="first_name" id="first_name" placeholder="First Name" maxlength="30" size="40">
                </div>
                <div class="form-group">
                  <input type="text" required="true" class="form-control" name="last_name" id="last_name" placeholder="Last Name" maxlength="30" size="40">
                </div>
                <div class="form-group">
                  <input type="text" required="true" class="form-control" name="email" id="email" placeholder="Email" maxlength="30" size="40">
                </div>
                <div class="form-group">
                  <textarea rows="8" required="true" name="message" id="message" placeholder="Please leave your message " cols="45"></textarea>
                </div>
                <input class="btn btn-success btn-md" type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;Send&nbsp;&nbsp;&nbsp;">
              </form>
              <div id="msg"></div>
            </div>
            <div class="col-xs-1"></div>
            <!-- end contact form -->
            <!-- start map -->
            <div class="col-xs-6">
              <div class="templatemo_maps">
                <div class="fluid-wrapper">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.313902334083!2d57.65303132395334!3d-20.037290487805944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217d0064527a5dad%3A0x4b37746b63197b38!2sV+Kanhye+Health+Foods+Co+Ltd!5e0!3m2!1sen!2smu!4v1486546626874"
                    width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <!-- end map -->
          </div>        
          <!-- start contact details -->
          <div class="row">
            <div class="col-xs-6">
              <div class="templatemo_footer">
                <span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">Melle Jeanne, Goodlands, Mauritius</span>
                <div class="clear"></div>
                <span class="left col-xs-1 fa fa-phone"></span>
                <span class="right col-xs-11">(+230) 5888 6967 / (+230) 5937 0239</span>
                <div class="clear"></div>
                <span class="left col-xs-1 fa fa-envelope"></span>
                <span class="right col-xs-11"><a href="mailto:sales@moringahealth.mu">sales@moringahealth.mu</a></span>                
              </div>
            </div>
          </div>
          <!-- end contact details -->
      </div>
    </div>
  </div>
  <?php include('include/footer.php'); ?>
  
  <?php 
    // code to send mail
    if(isset($_POST['submit'])){
      //$to = "sales@moringahealth.mu"; // this is your Email address
      $to = "luckyhuss@msn.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $subject = "Contact from website";
      $subject2 = "Copy of your message sent";
      $message = $first_name . " " . $last_name . " sent this message : " . "\n\n" . $_POST['message'];
      $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];      
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      if (!empty($first_name) && !empty($last_name)
            && !empty($from) && !empty($_POST['message'])) {
        // send 2 emails if form is Ok
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        // success message
        $message = "Your message has been sent.<br/>Thank you <b style=\'color: green;\'>" . $first_name . "</b>, we will contact you shortly.";
      } else {
        // failure message
        $message = "<b style=\'color: red;\'>Please fill in all the required fields.</b>";
      }
    }
  ?>
  <!-- ABO : dynamic message feedback -->
  <script>
    var str ='<?php echo $message?>';
    $("#msg").html("<br/><p>" + str + "</p>");
  </script>
</body>
</html>