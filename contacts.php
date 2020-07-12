<!DOCTYPE html>
<html lang="en">
<head>
    <title>coffee show | צור קשר</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="apple-itouch-icon" href="images/fav128.png">
    <link rel="icon" href="images/fav128.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/fav128.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/scroll_to_top.js"></script>
    <script src="js/script.js"></script>
<!--    <script src="js/TMForm.js"></script>-->
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.tools.min.js"></script>

    <!-- font-awesome font -->
    <link rel="stylesheet" href="font/font-awesome.css" type="text/css" media="screen">
    <!-- fontello font -->

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
	<script>
                if (window.location.href.indexOf("file") !== 0){
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52057782-1', 'coffee-show.co.il');
	  ga('send', 'pageview');
                }
	</script>
</head>
<body>
<!--button back top-->
<div id="back-top"></div>
<div class="main">
    <div class="div-content">


        <!--==============================header=================================-->
        <header  class="content_header">
            <div class="header_cont">

                <nav>
                    <ul class="sf-menu header_menu">
                        <li><a href="index.html"><span></span>אודות<strong></strong></a></li>
									<li><a class="external-link" href="https://buyme.co.il/affl/supplier/11897916/order?aff=11897952" target="_blank">Gift Card<strong></strong></a></li>
                        <li><a href="reservations.html">הזמנות ואירועים<strong></strong></a></li>
                        <li><a href="menu.html">התפריט שלנו<strong></strong></a></li>
                        <li><a href="gallery.html">גלריה<strong></strong></a></li>
                        <li class="current"><a href="contacts.html">צור קשר<strong></strong></a></li>
                    </ul>
                </nav>
                <h1><a href="index.html"><img src="images/coffeeShowLogoSmall.jpg" alt="CoffeeShow"></a></h1>

            </div>
        </header>

        <!--=======content================================-->






        <div class="container_16">
            <div class="grid_16 hebrew-direction">

                <div class="grid_11 alpha">
                    <h4>איך למצוא אותנו</h4>
                    <div class="grid_7 alpha">
                        <figure class="img_inner">
                            <iframe src="https://www.google.co.il/maps/embed?pb=!1m14!1m8!1m3!1d3387.3552390979758!2d34.8166491!3d31.896944100000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502b700e912cf3b%3A0x2637b24d869da870!2z15nXoten15EgNDM!5e0!3m2!1siw!2sil!4v1397309263087" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </figure>
                    </div>
                    <div class="grid_4 omega">
                        <address>
                            <dl>
                                <dt><b class="orange">Coffee Show - קופי שואו</b><br><br>רחוב יעקב 43, רחובות</dt>
                                <dd><span>טלפון:</span>052-623-2525</dd>
//                                 <dd><span>פקס</span>08-936-2113</dd>
                                <!--<dd>מייל: <a href="#" class="link2">mail@demolink.org</a></dd>-->
                            </dl>
                        </address>

                        <!--<address>-->
                        <!--<dl>-->
                        <!--<dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>-->
                        <!--<dd><span>Freephone:</span> +1 800 559 6580</dd>-->
                        <!--<dd><span>Telephone:</span> 1 800 603 6035</dd>-->
                        <!--<dd><span>FAX:</span> +1 800 889 9898 </dd>-->
                        <!--<dd>E-mail: <a href="#" class="link2">mail@demolink.org</a></dd>-->
                        <!--</dl>-->
                        <!--</address>-->
                    </div>

                </div>

                <div class="grid_5 omega">
                    <h4>צור קשר</h4>

                    <?php
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
					if (!empty(trim($name)) && !empty(trim($phone)) && !empty(trim($email)) && !empty(trim($message))) {
						mail('nisimnea@gmail.com', "התקבלה הודעה חדשה לקופי שואו מ: " . $name . " - מספר טלפון: " . $phone, $message, "From:".$email);
						mail('nitsanzo@gmail.com', "התקבלה הודעה חדשה לקופי שואו מ: " . $name . " - מספר טלפון: " . $phone, $message, "From:".$email);
					}
                    echo("<p class='pgreen'>הודעתך נשלחה בהצלחה.</p>");
                    ?>

                </div>


                <div class="clear"></div>




            </div>
        </div>

    </div>
    <!--=======footer=================================-->
    <footer>
        <div class="container_16">
            <div class="grid_16">
                <div class="footer_priv">
                    <div class="social">
                        <!--<a href="#"><img src="images/soc_icon_1.png" alt=""></a>-->
                        <a href="http://plus.google.com/u/0/b/100564339285915937824/100564339285915937824" target="_blank"><img src="images/soc_icon_2.png" alt=""></a>
                        <a href="http://www.facebook.com/coffeeshow2" target="_blank"><img src="images/soc_icon_3.png" alt=""></a>
                        <!--<a href="#"><img src="images/soc_icon_4.png" alt=""></a>-->
                    </div>
                    <p>Nitsan Zohar &copy; 2014 &bull; <a href="policy.html">תנאי שימוש</a><br><!--{%FOOTER_LINK} --></p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
