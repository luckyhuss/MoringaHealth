<!DOCTYPE html>
<html>

<head>
  <title>VKanhye Health Foods - News / Events / Outreach</title>
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
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=EB+Garamond" />
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
  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">
    ddsmoothmenu.init({
      mainmenuid: "templatemo_flicker", //menu DIV id
      orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
      classname: 'ddsmoothmenu', //class added to menu's outer DIV
      //customtheme: ["#1c5a80", "#18374a"],
      contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    });   
  </script>
</head>

<body>
  
  <?php include('header.php'); ?>

  <div class="templatemo_lightgrey_about" id="templatemo_about">
    <div class="container">
      <div class="templatemo_content_box">
        <!-- SME Innovation Award 2017 -->
        <div class="panel-group" style="width: 90%">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" href="#collapse1" style="font-weight:bold">SME Innovation Award 2017</a></h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>VKanhye Health Foods Co. Ltd is the <u>Grand Winner</u> of the <b>SME Innovation Award 2017</b>.</p> 
                <p>The SME Innovation Award 2017 comprised of two categories namely : <p>
                  <ul>
                    <li>Best Product Innovation</li>
                    <li>Best Process Innovation</li>
                  </ul>
                <p>The Grand Winner is the Winner in <i style="color: blue;">both categories</i>.</p>
                <p>The main objective of the Award was to encourage SMEs to adopt innovative approaches and practices leading to business transformation, 
                  new markets, productivity improvement and increased investment.</p>
                <p class="center">
                  <img src="images/events/sme17.png" class="image80" title="SME Innovation Award 2017">
                </p>
              </div>
            </div>
          </div>
        </div>
        <br />
        <!-- Factory Visits -->
        <div class="panel-group" style="width: 90%">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" href="#collapse2" style="font-weight:bold">Factory Visits</a></h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>Several requests for factory visits are obtained from students, senior citizens, socio-cultural groups as well as tourists.</p>
                <p style="color: green;"><b><i>Factory visit is free and visitors benefit from purchase of moringa products at factory price.</i></b></p>
                <p class="center">
                  <img src="images/events/factory1.png" class="image80" title="Factory Visits 1">
                </p>
                <p class="center">
                  <img src="images/events/factory2.png" class="image80" title="Factory Visits 2">
                </p>
              </div>
            </div>
          </div>
        </div>
        <br />
        <!-- Participation in locally organized fairs -->
        <div class="panel-group" style="width: 90%">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" href="#collapse3" style="font-weight:bold">Participation in locally organized fairs</a></h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>The company participates in locally organized fairs such as World Food day, Family day, Farmers day, and Salon de la Santé.</p>
                <p><b><i>The constant awareness and branding has been the major driving force for the organization.</i></b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  
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