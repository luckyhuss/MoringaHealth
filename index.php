<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>Home - V Kanhye Health Foods</title>
  <?php include('include/header.php'); ?>
</head>
<body>
  <?php include('include/menu.php'); ?>
  <div class="templatemo_lightgrey_about" id="templatemo_about">
    <div class="container">
      <div class="templatemo_content_box">
        <!-- start main carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="width: 90%">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
          </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active ">
            <p class="center"><img src="images/slider/4_.jpg" class="img-rounded" title="Grand Winner of SME Innovation Award 2017"></p>
            <div class="carousel-content" style="background-color: darkslategrey ;">
              &nbsp;V Kanhye Health Foods Co. Ltd : Grand Winner of the SME Innovation Award 2017&nbsp;
            </div>
          </div>
          <div class="item">
            <p class="center"><img src="images/slider/1_.jpg" class="img-rounded" title="Pot of Moringa tea"></p>
            <div class="carousel-content" style="background-color: darkslategrey;">
              &nbsp;Pot of Moringa tea&nbsp;
            </div>
          </div>
          <div class="item">
            <p class="center"><img  src="images/slider/7_.jpg" class="img-rounded" title="Grand Winner of SME Innovation Award 2017"></p>
            <div class="carousel-content" style="background-color: darkslategrey;">
              &nbsp;V Kanhye Health Foods Co. Ltd : Grand Winner of the SME Innovation Award 2017&nbsp;
            </div>
          </div>
          <div class="item">
            <p class="center"><img src="images/slider/3_.jpg" class="img-rounded" title="Cup of Moringa tea"></p>
            <div class="carousel-content" style="background-color: darkslategrey;">
              &nbsp;Cup of Moringa tea&nbsp;
            </div>
          </div>
          <div class="item">
            <p class="center"><img src="images/slider/5_.jpg" class="img-rounded" title="Our products"></p>
            <div class="carousel-content" style="background-color: darkslategrey;">
              &nbsp;Our products&nbsp;
            </div>
          </div>
          <div class="item">
            <p class="center"><img style="height:350px" src="images/slider/6_.jpg" class="img-rounded" title="V Kanhye with Hon. S. Bholah"></p>
            <div class="carousel-content" style="background-color: darkslategrey;">
              &nbsp;V Kanhye with Hon. S. Bholah, Minister of Business, Enterprise and Cooperatives&nbsp;
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- end main carousel -->
      <br/>
      <div class="row">
        <div class="col-xs-11 center">
          <b class="mainHighlightedBlock">We plant, We grow, We harvest, We prepare, We bag, all natural and with care, just for you.</b>
        </div>
      </div>
      <br/>
      <!-- start middle -->
      <div class="templatemo_reasonbg img-rounded">
        <div class="clear height10"></div>
        <h3>Moringa &laquo; The Miracle Plant &raquo;</h3>
        <h3><span style="font-size: 32px">100</span>% Pure and Natural ( infusion and powder )</h3>
        <br/>
        <p>Produced from moringa grown in our own farm and natural plantations</p>
        <p>Free from fertilisers, pesticides and chemicals</p>
        <p>Suitable for all ages including infants and the elderly</p>
        <p>Moringa leaves as infusion, the most convenient and easy to use form</p>
        <p>Double envelope for maximum protection and freshness</p>
        <p>Zero sugar, no additives, gluten free, non-gmo and caffeine free</p>  
        <div class="clear height10"></div>
      </div>
      <!-- end middle -->
      <br/>
      <!-- start photos -->
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
          <div class="portfolio-item">
            <div class="portfolio-thumb">
              <img src="images/portfolio/1.jpg" class="img-rounded" title="Cup of Moringa Tea">
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
          <div class="portfolio-item">
            <div class="portfolio-thumb">
              <img src="images/portfolio/2.jpg" class="img-rounded" title="Certified ECOCERT">
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
          <div class="portfolio-item">
            <div class="portfolio-thumb">
              <img src="images/portfolio/3.jpg" class="img-rounded" title="Moringa, The Miracle Plant">
            </div>
          </div>
        </div>
      </div>
      <!-- end photos -->
    </div>
  </div>
  </div>
  <?php include('include/footer.php'); ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.cycle2.min.js"></script>
  <script src="js/jquery.cycle2.carousel.min.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>
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