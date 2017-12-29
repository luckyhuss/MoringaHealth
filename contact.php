<!DOCTYPE html>

<html>

<head>
  <title>V Kanhye Health Foods - Contact us</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <!-- 
    Smoothy Template 
    http://www.templatemo.com/preview/templatemo_396_smoothy 
    -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo_style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/templatemo_misc.css">

  <link href="css/circle.css" rel="stylesheet">
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/nivo-slider.css">
  <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/JavaScript" src="js/slimbox2.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

  <!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.cycle2.min.js"></script>
  <script src="js/jquery.cycle2.carousel.min.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>

  <script type="text/javascript">

    ddsmoothmenu.init({
      mainmenuid: "templatemo_flicker", //menu DIV id
      orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
      classname: 'ddsmoothmenu', //class added to menu's outer DIV
      //customtheme: ["#1c5a80", "#18374a"],
      contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })

  </script>

</head>

<body>

  <?php include('header.php'); ?>

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

  <?php include('footer.php'); ?>
  
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

  <!-- dynamic message feedback -->
  <script>
    var str ='<?php echo $message?>';
    $("#msg").html("<br/><p>" + str + "</p>");
  </script>

  <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
  <script type="text/javascript">
    $(function () {
      var default_view = 'grid';
      if ($.cookie('view') !== 'undefined') {
        $.cookie('view', default_view, { expires: 7, path: '/' });
      }
      function get_grid() {
        $('.list').removeClass('list-active');
        $('.grid').addClass('grid-active');
        $('.prod-cnt').animate({ opacity: 0 }, function () {
          $('.prod-cnt').removeClass('dbox-list');
          $('.prod-cnt').addClass('dbox');
          $('.prod-cnt').stop().animate({ opacity: 1 });
        });
      }
      function get_list() {
        $('.grid').removeClass('grid-active');
        $('.list').addClass('list-active');
        $('.prod-cnt').animate({ opacity: 0 }, function () {
          $('.prod-cnt').removeClass('dbox');
          $('.prod-cnt').addClass('dbox-list');
          $('.prod-cnt').stop().animate({ opacity: 1 });
        });
      }
      if ($.cookie('view') == 'list') {
        $('.grid').removeClass('grid-active');
        $('.list').addClass('list-active');
        $('.prod-cnt').animate({ opacity: 0 });
        $('.prod-cnt').removeClass('dbox');
        $('.prod-cnt').addClass('dbox-list');
        $('.prod-cnt').stop().animate({ opacity: 1 });
      }

      if ($.cookie('view') == 'grid') {
        $('.list').removeClass('list-active');
        $('.grid').addClass('grid-active');
        $('.prod-cnt').animate({ opacity: 0 });
        $('.prod-cnt').removeClass('dboxlist');
        $('.prod-cnt').addClass('dbox');
        $('.prod-cnt').stop().animate({ opacity: 1 });
      }

      $('#list').click(function () {
        $.cookie('view', 'list');
        get_list()
      });

      $('#grid').click(function () {
        $.cookie('view', 'grid');
        get_grid();
      });

      /* filter */
      $('.menuSwitch ul li').click(function () {
        var CategoryID = $(this).attr('category');
        $('.menuSwitch ul li').removeClass('cat-active');
        $(this).addClass('cat-active');

        $('.prod-cnt').each(function () {
          if (($(this).hasClass(CategoryID)) == false) {
            $(this).css({ 'display': 'none' });
          };
        });
        $('.' + CategoryID).fadeIn();

      });
    });
  </script>
  <script src="js/jquery.singlePageNav.js"></script>

  <script type="text/javascript">
    $(window).load(function () {
      $('#slider').nivoSlider({
        prevText: '',
        nextText: '',
        controlNav: false,
      });
    });
  </script>
  <script>
    $(document).ready(function () {

      // hide #back-top first
      $("#back-top").hide();

      // fade in #back-top
      $(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            $('#back-top').fadeIn();
          } else {
            $('#back-top').fadeOut();
          }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
          $('body,html').animate({
            scrollTop: 0
          }, 800);
          return false;
        });
      });

    });
  </script>
  <script type="text/javascript">
      < !--
      function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block') {
          e.style.display = 'none';
          $('#togg').text('show footer');
        }
        else {
          e.style.display = 'block';
          $('#togg').text('hide footer');
        }
      }
      //-->
  </script>
  <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <script type="text/javascript">
    $(function () {
      $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
  </script>
  <script src="js/stickUp.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    //initiating jQuery
    jQuery(function ($) {
      $(document).ready(function () {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.mWrapper').stickUp();
      });
    });
  </script>
  <script>
    $('a.menu').click(function () {
      $('a.menu').removeClass("active");
      $(this).addClass("active");
    });
  </script>

  <script> < !--scroll to specific id when click on menu-- >
      	 // Cache selectors
var lastId,
      topMenu = $("#top-menu"),
      topMenuHeight = topMenu.outerHeight() + 15,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {
      var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
      $('html, body').stop().animate({
        scrollTop: offsetTop
      }, 300);
      e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function () {
      // Get container scroll position
      var fromTop = $(this).scrollTop() + topMenuHeight;

      // Get id of current scroll item
      var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop)
          return this;
      });
      // Get the id of the current element
      cur = cur[cur.length - 1];
      var id = cur && cur.length ? cur[0].id : "";

      if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
          .parent().removeClass("active")
          .end().filter("[href=#" + id + "]").parent().addClass("active");
      }
    });
  </script>
  <!-- templatemo 396 smoothy -->
  <!-- 
    Free Template by templatemo
    http://www.templatemo.com
-->
</body>

</html>