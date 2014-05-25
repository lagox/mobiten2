<?php
// если мы не знаем реферала
if (!isset($_COOKIE['referer'])) {
     // то запоминаем его
     setcookie('referer', $_SERVER['HTTP_REFERER'], mktime(0, 0, 0, 1, 1, 2020));
}
?>
<?php
// запоминаем utm-метки
if (isset($_GET['utm_source']) && !isset($_COOKIE['utm_source'])) {
    foreach ($_GET as $key => $val) {
        if (0 === strpos($key, 'utm')) {
            setcookie($key, $val, mktime(0, 0, 0, 1, 1, 2020));
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>ANTSPRO – Mobile App Development Company in Kazakhstan. Full-cycle Custom iOS and Android App Development.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">



    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript" charset="utf-8" src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=isBAWtMkToZQRbyWs-LKKjc_MQcwb0Dk&id=map"></script>



</head>

<body id="body" data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
                <a data-scroll href="#body">Home</a>
            </li>
            <li>
                <a data-scroll href="#services">About us</a>
            </li>
            <li>
                <a data-scroll href="#techs">Technologies</a>
            </li>
            <li>
                <a data-scroll href="#works">Portfolio</a>
            </li>
            <li>
                <a data-scroll href="#clients">Our customers</a>
            </li>
            <li>
                <a data-scroll href="#prices">Prices</a>
            </li>
            <li>
                <a data-scroll href="#present">Presentation</a>
            </li>
            <li>
                <a data-scroll href="#contacts">Contacts</a>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
            <p class="navbar-text phone-number">Mob.phone: +7 707 377 10 71</p>
            </li>
            <li>
                <p class="navbar-text">
                <button type="button" class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#requestCallModal" id="request-call-button"><img src="img/tube.png" alt=""> Request a call back</button>
                </p>

            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="intro-header">
        <div class="cleanup">
            <div class="cleanup_two">
                <div class="container">
                    <div class="row">
                        <div class="text-center" id="logo">
                            <a id="logotip-link" href="index.php">
                                <img src="img/logosmall.png" alt="ANTSPRO – мобильные решения" title="ANTSPRO – мобильные решения">
                            </a>
                        </div>
                        <div class="choose-languages">
                            <span class="active-lang">Eng</span> | 
                            <a href="index.php">Rus</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-left: 0">
                            <div class="intro-message">
                                <div class="wrapper-for-zagolovok">
                                    <h1>Full-cycle Custom iOS and Android App Development</h1>
                                    <h3>iOS, Android, interfaces, design, web development with Ruby on Rails and PHP</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row request-call-padding-bottom">
                        <div class="text-center">
                            <a data-scroll href="#prices" id="btn-request-project">Calculate the cost of the project</a>
                        </div>
                    </div>

                </div>
            </div>
        <!-- /.container -->
        </div>
    </div>
    <!-- /.intro-header -->

    <div class="content-section-a" id="services">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="services-title">About us</h1>
                </div>
            </div>
            <div class="row text-for-services">
                <div class="col-lg-12">
                    <p>Company "ANTSPRO" was founded in 2012 in Astana (Kazakhstan). At the moment, we work directly with the end customer and provide it-outsourcing in mobile application development and software for businesses with companies from Russia, USA, UK and Germany.</p>
                    <p>Our company offers a full range of services for the development of mobile applications. We develop B2B and B2C solutions based on integrated web services and mobile solutions for iOS and Android.</p>
                    <p>To calculate the cost of the project, we will send you a brief. After we received the information we draw conclusions on the cost of the project and its term.</p>
                </div>
            </div>
            <div class="row services-list">
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/iphone_ipad.png" alt="Development of mobile applications for iPhone and iPad" title="Development of mobile applications for iPhone and iPad">
                        <h2>Development of mobile applications for iPhone and iPad</h2>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/android_trans_icon.png" alt="Development of mobile applications for Android" title="Development of mobile applications for Android">
                        <h2>Development of mobile applications for Android</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/webdevicon.png" alt="Development of server applications and API" title="Development of server applications and API">
                        <h2 id="server-dev-label">Development of server applications and API</h2>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/webmobile.png" alt="Web application development, mobile versions of sites" title="Web application development, mobile versions of sites"><h2>Web application development, mobile versions of sites</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/gaapicon.png" alt="Mobile app distribution in App Store and Google Play" title="Mobile app distribution in App Store and Google Play">
                        <h2>Mobile app distribution in App Store and Google Play</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/designfree3.png" alt="Дизайн интерфейсов приложений" title="Дизайн интерфейсов приложений"><h2>UI/UX Design</h2>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b design-free">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="design-free-title">Application UI/UX design, we give free</h1>
                    
                </div>
                <div class="col-lg-12 design-free-button">
                    <button type="button" class="btn btn-lg btn-yellow" id="request-free-design" data-toggle="modal" data-target="#requestCallModal" >Submit a request <img src="img/arr.png"></button><br />
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-b app-store">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="app-store-title">Mobile app distribution in App Store and Google Play - free</h1>
                     <p class="conf-desc">If the client is unable to place a mobile app in the App Store or Google Play - we will do it for free.</p>
                <div>
                    <img src="img/appstore.png" alt="Mobile app distribution in App Store and Google Play - free" title="Mobile app distribution in App Store and Google Play - free">
                </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <div class="content-section-b conf">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="conf-title">100% guaranteed privacy</h1>
                    <p class="conf-desc">We guarantee 100% confidentiality of the data in your application and that your data will not be transferred to other persons. This item we consider the contract</p>
                    <div>
                        <img src="img/lock.png" alt="100% guaranteed privacy">
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

     <div class="content-section-b one-c">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="one-c-title">Interaction with 1C, SAP and other accounting systems</h1>
                    <p class="one-c-desc">We can develop mobile application for the business owner, which will be integrated with 1C or other accounting system. Advantages of this bunch: business mobility, all the numbers on a single screen, beautiful charts and graphs, remote control</p>
                    <div>
                        <img src="img/sap_logo.gif" alt="Interaction with 1C, SAP and other accounting systems">
                </div>
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <div class="content-section-b tech" id="techs">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tech-title">
                        Technology that we use
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="list-tech-item">
                    <div class="col-lg-3 tech-item">
                        <img src="img/objective-c-logo.png" alt="Objective-C">
                        <div class="tech-item-title">
                            Objective-C
                        </div>
                    </div>
                    <div class="col-lg-3 tech-item">
                        <img src="img/java-logo.png" alt="Java">
                        <div class="tech-item-title">
                            Java
                        </div>
                    </div>
                    <div class="col-lg-3 tech-item">
                        <img src="img/ruby-logo.png" alt="Objective-C">
                        <div class="tech-item-title">
                            Ruby
                        </div>
                    </div>
                    <div class="col-lg-3 tech-item">
                        <img src="img/html5-logo.png" alt="Objective-C">
                        <div class="tech-item-title">
                            Html5
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>


      <div class="content-section-b support">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="support-title">2 months warranty support - free of charge</h1>
                    <p class="support-desc">After starting the application into production, we give a guarantee of support in 2 months. All for free.</p>
                    <div>
                        <img src="img/designfree.png" alt="">
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>



      <div class="content-section-b vigoda">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="vigoda-title">
                        Working with us is profitable - 30% prepayment<br />
                        rest payment after results
                    </h1>
                    <div class="raschet-one-title">Fill out an application for assessment of the project</div>
                    <div class="raschet-two-title">And we will contact with you at a convenient time for you</div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">&nbsp;</div>
                <div class="col-lg-4">
                    <form action="request_price.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone*" required>
                        </div>
                        <div class="form-group">
                            <div class="confide-main">
                                <img src="img/lockicon.png"> Your contact details are safe and will not be disclosed to third parties
                            </div>
                            <button type="submit" class="btn btn-lg btn-yellow">Order cost calculation</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">&nbsp;</div>
            </div>

        </div>
        <!-- /.container -->

    </div>



      <div class="content-section-b portfolio" id="works">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                   <h1 class="portfolio-title">Portfolio</h1>
                </div>
            </div>
            <div class="row list-jobs">
                <div class="col-lg-4">
                    <h2>Etvans CRM</h2>
                    <div>
                        <a href="img/etvans.png" class="gallery-etvans">
                            <img src="img/etvans.png" alt="Etvans CRM" class="without-border">
                        </a>
                    </div>
                    <div class="desc">
                        CRM for real estate agencies.<br/>
                        Website: <a href="http://etvans.com">etvans.com</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h2>Standard Insurance</h2>
                    <div><img src="img/si.png" alt="Standard Insurance"></div>
                    <div class="desc">
                        The application is developed for clients of the insurance company Standard Insurance..<br/>
                        Website: <a href="https://play.google.com/store/apps/details?id=kz.myfirst">play.google.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>Sozdik.kz iOS</h2>
                    <div>
                        <img src="img/sozios.png" alt="Sozdik.kz iOS">
                    </div>
                    <div class="desc">
                        The official iOS application for the site sozdik.kz.<br />
                        Website: <a href="https://itunes.apple.com/kz/app/sozdik.kz/id663004607?mt=8">itunes.apple.com</a>
                    </div>
                </div>
            </div>
            <div class="row list-jobs">
                <div class="col-lg-4">
                    <h2>Sozdik.kz Android</h2>
                    <div>
                        <img src="img/sozandroid.png" alt="Sozdik.kz Android">
                    </div>
                    <div class="desc">
                        The official Android application for the site sozdik.kz.<br />
                        Website: <a href="https://play.google.com/store/apps/details?id=kz.sozdik">play.google.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>System to take readings(web solution)</h2>
                    <div>
                        <img src="img/sspserver.png" alt="ССП Android">
                    </div>
                    <div class="desc">
                        System to take readings<br />
                        Web application for readout in the housing sector, introduced in Taraz (Kazakhstan). Written in Ruby on Rails
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>System to take readings (Android app)</h2>
                    <div>
                        <img src="img/sspmobile.png" alt="ССП Android">
                    </div>
                    <div class="desc">
                        System to take readings<br />
                        Mobile application for readout in the housing sector, introduced in Taraz (Kazakhstan).
<br />
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>



     <div class="content-section-b customers" id="clients">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="customers-title">
                        Our customers
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <img src="img/grm.jpg" alt="Guild of Realtors of Moscow" title="Guild of Realtors of Moscow">
                </div>
                <div class="col-lg-3">
                    <img src="img/sozdik-logo.png" alt="Sozdik.kz" title="Sozdik.kz">
                </div>
                <div class="col-lg-3">
                    <img src="img/kt.jpg" alt="Kazakhtelekom" title="Kazakhtelekom">
                </div>
                <div class="col-lg-3">
                    <img src="img/si-logo.png" alt="Standard Insurance" title="Standard Insurance">
                </div>
            </div>


        </div>
        <!-- /.container -->

    </div>

    <div class="content-section-b main-form" id="prices">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="main-form-title">
                        Calculating the cost of the project
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 self-main-form">
                    <div class="raschet-one-title">Fill out an application for assessment of the project
</div>
                    <div class="raschet-two-title">And we will contact with you at a convenient time for you
</div>
                    <form action="request_price.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone*" required>
                        </div>
                        <div class="form-group">
                            <textarea name="project-descript" class="form-control info-about-project" placeholder="Information about the project*" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="confide-main">
                                <img src="img/lockicon.png"> Your contact details are safe and will not be disclosed to third parties
                            </div>
                            <button type="submit" class="btn btn-lg btn-yellow">Order cost calculation</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>


        </div>
        <!-- /.container -->

    </div>


     <div class="content-section-a presentation" id="present">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="presentation-title">Presentation</h1>
                    <!-- <iframe src="http://www.slideshare.net/slideshow/embed_code/33795408" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> -->
                </div>
                <div class="col-lg-12 presentation-button">
                    <a type="button" href="antspro_eng.pdf" class="btn-ants-green"><img src="img/pdf-icon.png"> Download (PDF)</a><br />
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>

    <div class="content-section-b contacts" id="contacts">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="contacts-title">
                        Contacts
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="contacts-self-block">
                    Address: The Republic of Kazakhstan, Astana, street 187, 16/3, 1
                    <br />
                    mob.phone.: +7 707 377 10 71<br />
                    e-mail: <a href="mailto:antspro.com">astana@antspro.com</a><br />
                    skype: lagox.skype
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- Google Maps Api -->
    <div id="map">
    
    </div>
    

    <footer class="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="foot-phone">+7 707 377 10 71</div>
                    <div class="foot-email"><a href="mailto:astana@antspro.com">astana@antspro.com</a></div>
                    <button type="button" class="btn btn-lg btn-yellow" id="request-call-button-2" data-toggle="modal" data-target="#requestCallModal" ><img src="img/tube.png"> Request a call back</button>
                    <div class="copy">
                        ANTSPRO – mobile solutions &copy; 2012-2014
                    </div>
<!--                     <div class="footer-desc">
                        <h2>Разработка мобильных приложений под платформы iOS и Android в Алматы, в Астане, в Москве.</h2>
                        <h2>IT-аутсорсинг в сфере разработки мобильных приложений по всему миру</h2>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- modal windows -->

    <!-- request call -->
    <div class="modal fade" id="requestCallModal">
      <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body antspro-modal">
            <h3>Request a call back</h3>
            <div class="antspro-modal-form">
                <form action="request_call.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone*" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn warning-black btn-yellow">Submit a request</button>
                        </div>
                    </form>
                    <div class="confide-modal">
                         <img src="img/lockicon.png"> Your contact details are safe and will not be disclosed to third parties
                    </div>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23987518 = new Ya.Metrika({id:23987518, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/23987518" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-42109211-3', 'antspro.com');
      ga('send', 'pageview');

    </script>

    <!-- smooth scroll -->
    <script type="text/javascript">
        smoothScroll.init({
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
            // offset: 10, // Integer. How far to offset the scrolling anchor location in pixels
            // callbackBefore: function ( toggle, anchor ) {}, // Function to run before scrolling
            // callbackAfter: function ( toggle, anchor ) {} // Function to run after scrolling
        });
    </script>
</body>

</html>
