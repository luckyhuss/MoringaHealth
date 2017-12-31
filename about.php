<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>About us - V Kanhye Health Foods</title>
    <?php include('include/header.php'); ?>
</head>
<body>
    <?php include('include/menu.php'); ?>
    <div class="templatemo_lightgrey_about" id="templatemo_about">
        <div class="container">
            <div class="templatemo_content_box">
                <h4 class="pageTitle">>> About Us</h4>
                <div class="row">
                    <div class="col-xs-11">
                        <p>V. Kanhye Health Foods Co. Ltd (VKHF) was incorporated in 2014 in the Republic of Mauritius. The Director of VKHF, 
                            Vinay Kanhye is an Electrical and Electronic Engineer by profession and is very passionate about Moringa and Health.</p>
                        <br/>
                        <p>He is a first generation entrepreneur and hails from an agricultural family background, he had a strong desire
                            to develop a premium quality food supplement that will help the masses to conveniently, enjoy good health
                            at a reasonable cost.</p>
                        <br/>
                        <p>He did a lot of research on Moringa Oleifera (commonly known as Brede Mouroum in Mauritius) and he realised that
                            <b style="color: blue;">“Moringa”</b> really is a treasure trove of all sorts of natural biological goodies with 
                            a vitamin and micronutrient content that makes our standard five a day fruit and vegetables lacking in goodness 
                            by comparison. It is no wonder that it is referred as the <b>“Miracle Plant”</b>.</p>
                        <br/>
                        <p>Vinay realised that in spite of all the nutrition and health benefits of Moringa leaves, the consumption of Moringa
                            was drastically going down, especially in Mauritius. Due to lack of awareness, most people have stopped eating
                            Moringa leaves and they even started cutting down the Moringa trees, which was always present in every back
                            yard, thinking that it is useless.</p>
                        <br/>
                        <p>Vinay realised that the present generation does not like the taste of Brede Mouroum, a traditional food, which
                            was also cumbersome to prepare. He had this dream of making the highly valuable Moringa a part of everyone’s
                            diet, so that everyone can enjoy the health benefits of this <b style="color: blue;">“Miracle Plant”</b>.</p>
                        <br/>
                        <p>With further research, he came across Moringa Infusion, which was gaining big popularity in the Western Countries.
                            He concluded that Moringa as an Infusion is the most convenient and most acceptable form. </p>
                        <br/>
                        <p>Vinay’s family owned farmlands in Grand Gaube, the Northern Part of Mauritius. The region is free from air and
                            water pollution and enjoys a sunny weather all year through. Vinay started converting all these farmlands
                            into Moringa Plantation and also simultaneously started the construction of a factory for processing the
                            Moringa leaves into Infusion. Currently VKHF is involved in cultivating a Moringa plantation of about 6 acres
                            and is in the process of adding another 10 acres shortly. </p>
                        <br/>
                        <p>VKHF is the pioneer of Moringa Infusion in Mauritius and is one of the few vertically integrated organisations
                            of the world, that grow their own Moringa plants and also manufacture products from them. </p>
                        <br/>
                        <p>VKHF plantations are <b style="color: green;">100% Bio</b> and they <b style="color: red;">do not use any</b> Fertilisers, Pesticides or other chemicals. They also employ
                            a specialised manufacturing process to retain all the nutrients of the leaves intact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php'); ?>
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