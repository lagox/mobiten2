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

    <title>ANTSPRO - профессиональная разработка мобильных приложений и IT-аутсорсинг. Платформы iOS и Android</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">

</head>

<body id="body">
    <button class="btn btn-info" id="collapsizer">
        <span class="glyphicon glyphicon-th"></span> Меню
    </button>
    <nav class="navbar navbar-fixed-top navbar-inverse shadow scroll-header" role="navigation">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#body">Главная</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#services">Услуги</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#techs">Технологии</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#works">Наши работы</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#clients">Наши клиенты</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#prices">Цены</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#present">Презентация</a></li>
                <li><a data-scroll data-speed="500" data-easing="easeInOutCubic" data-url="false" href="#contacts">Контакты</a></li>
            </ul>
        </div>
    </nav>

    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" id="logo">
                    <a id="logotip-link" href="index.php">
                        <img src="img/logo.png" alt="Ants Pro" title="Ants Pro">
                    </a>
                    <p class="descriptor-site">Мобильные решения</p>
                </div>
                <div class="col-lg-2 col-lg-offset-8" id="top-contacts">
                    <p class="phone-number-descript">Есть вопросы? Звони!</p>
                    <p class="phone-number">+7 707 377 10 71</p>
                    <p class="request-call-block">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#requestCallModal" id="request-call-button"><img src="img/tube.png"> Закажи звонок</button>
                    </p>
                    <p class="email-top">
                        <a href="mailto:astana@antspro.com">astana@antspro.com</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="padding-left: 0">
                    <div class="intro-message">
                        <div class="wrapper-for-zagolovok">
                            <h1>Профессиональная разработка мобильных приложений и IT-аутсорсинг<br /></h1>
                            <h3>Платформы iOS и Android</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div class="content-section-a" id="services">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="services-title">Наши услуги</h1>
                </div>
            </div>
            <div class="row services-list">
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/iphoneipadicon.png" alt="Разработка под iPhone и iPad">
                        <h2>Разработка под iPhone и iPad</h2>    
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/androidicon.png" alt="Разработка под Android">
                        <h2>Разработка под Android</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/terminalicon.png" alt="Разработка серверных приложений">
                        <h2>Разработка серверных приложений</h2>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/webdevicon.png" alt="Веб-разработка"><h2>Разработка веб-приложений</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/gaapicon.png" alt="Размещение приложений в App Store и Google Play">
                        <h2>Размещение в App Store и Google Play</h2>  
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="box-service shadow">
                        <img src="img/designicon.png" alt="Дизайн приложений"><h2>Дизайн</h2>
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
                    <h1 class="design-free-title">Дизайн приложения мы дарим бесплатно</h1>
                </div>
                <div class="col-lg-12 design-free-button">
                    <button type="button" class="btn btn-success btn-lg" id="request-free-design" data-toggle="modal" data-target="#requestCallModal" ><img src="img/arr.png"> Заказать</button><br />
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
                    <h1 class="app-store-title">Размещение в App Store и Google Play - бесплатно</h1>
                    <div>
                    <img src="img/appstore.png" alt="Размещение в App Store и Google Play - бесплатно!">
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
                    <h1 class="conf-title">100% гарантия конфиденциальности данных</h1>
                    <p class="conf-desc">Мы гарантируем 100% конфиденциальность данных в ваших приложениях и то, что ваши данные не будут переданы другим лицам. Данный пункт мы обговариваем в договоре</p>
                    <div>
                        <img src="img/lock.png" alt="100% гарантия конфиденциальности данных">
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
                    <h1 class="one-c-title">Взаимодействие с 1C и другими учетными системами</h1>
                    <p class="one-c-desc">Мы можем разработать мобильное приложение для владельца бизнеса, которое будет интегрировано с 1C или другой учетной системой. Плюсы такой связки: мобильность бизнеса, все цифры на одном экране, красивые диаграммы и графики, удаленное управление</p>
                    <div>
                        <img src="img/1с.jpg" alt="Взаимодействие с 1C и другими учетными системами">
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
                        Технологии, которые мы используем
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
                    <h1 class="support-title">2 месяца гарантийной поддержки - бесплатно</h1>
                    <p class="support-desc">После запуска приложения в производственную эксплуатацию мы даем гарантию на поддержку в 2 месяца. Все это бесплатно.</p>
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
                        Работать с нами выгодно - 30% предоплата<br />
                        остальное по результату
                    </h1>
                </div>           
            </div>

            <div class="row">
                <div class="col-lg-4">&nbsp;</div>
                <div class="col-lg-4">
                    <form action="request_price.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Введите имя*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Введите email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Введите телефон*" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Заказать расчет стоимости</button>
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
                   <h1 class="portfolio-title">Наши работы</h1>
                </div>
            </div>
            <div class="row list-jobs">
                <div class="col-lg-4">
                    <h2>Этванс CRM</h2>
                    <div>
                        <a href="img/etvans.png" class="gallery-etvans">
                            <img src="img/etvans.png" alt="Этванс CRM" class="without-border">
                        </a>
                    </div>
                    <div class="desc">
                        CRM для агентств недвижимости.<br/>
                        Сайт: <a href="http://etvans.com">etvans.com</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h2>Standard Insurance</h2>
                    <div><img src="img/si.png" alt="Standard Insurance"></div>
                    <div class="desc">
                        Приложение предназначено для клиентов страховой компании Standard Insurance.<br/>
                        Сайт: <a href="https://play.google.com/store/apps/details?id=kz.myfirst">play.google.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>Sozdik.kz iOS</h2>
                    <div>
                        <img src="img/sozios.png" alt="Sozdik.kz iOS">
                    </div>
                    <div class="desc">
                        Официальное iOS приложение сайта sozdik.kz.<br />
                        Сайт: <a href="https://itunes.apple.com/kz/app/sozdik.kz/id663004607?mt=8">itunes.apple.com</a>
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
                        Официальное Android приложение сайта sozdik.kz.<br />
                        Сайт: <a href="https://play.google.com/store/apps/details?id=kz.sozdik">play.google.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>Веб-приложение ССП</h2>
                    <div>
                        <img src="img/sspserver.png" alt="ССП Android">
                    </div>
                    <div class="desc">
                        Система снятия показаний<br />
                        Веб-приложение для снятия показаний в сфере коммунальных услуг, внедрено в г.Тараз. Написано на Ruby on Rails
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>ССП Android</h2>
                    <div>
                        <img src="img/sspmobile.png" alt="ССП Android">
                    </div>
                    <div class="desc">
                        Система снятия показаний<br />
                        Мобильное приложение для снятия показаний в сфере коммунальных услуг, внедрено в г.Тараз<br />
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
                        Наши клиенты
                    </h1>
                </div>           
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-3">
                    <img src="img/grm.jpg" alt="Гильдия риелторов Москвы" title="Гильдия риелторов Москвы">
                </div>
                <div class="col-lg-3">
                    <img src="img/sozdik-logo.png" alt="Sozdik.kz" title="Sozdik.kz">
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
                        Расчет стоимости проекта
                    </h1>
                </div>           
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 self-main-form">
                    <form action="request_price.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Введите имя*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Введите email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Введите телефон*" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Заказать расчет стоимости</button>
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
                    <h1 class="presentation-title">Презентация</h1>
                    <iframe src="http://www.slideshare.net/slideshow/embed_code/33795408" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                </div>
                <div class="col-lg-12 presentation-button">
                    <a type="button" href="antspro_projects.pdf" class="btn btn-success btn-lg"><img src="img/pdf-icon.png"> Скачать презентацию в PDF</a><br />
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
                        Контакты
                    </h1>
                </div>           
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="city-title">Астана</div>
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=51.168419,71.391388&amp;daddr=&amp;hl=ru&amp;geocode=&amp;sll=51.169267,71.390405&amp;sspn=0.008019,0.01929&amp;mra=mift&amp;mrsp=0&amp;sz=16&amp;ie=UTF8&amp;t=m&amp;ll=51.169267,71.390405&amp;spn=0.008019,0.01929&amp;output=embed"></iframe>
                    <br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=51.168419,71.391388&amp;daddr=&amp;hl=ru&amp;geocode=&amp;sll=51.169267,71.390405&amp;sspn=0.008019,0.01929&amp;mra=mift&amp;mrsp=0&amp;sz=16&amp;ie=UTF8&amp;t=m&amp;ll=51.169267,71.390405&amp;spn=0.008019,0.01929" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
                </div>
                <div class="col-lg-7 contacts-self-block">
                    Адрес: Республика Казахстан, город Астана, ул.187, 16/3, 1
                    <br />
                    моб.тел.: +7 707 377 10 71<br />
                    e-mail: <a href="mailto:antspro.com">astana@antspro.com</a><br />
                    skype: lagox.skype
                </div>
            </div>
             
        </div>
        <!-- /.container -->

    </div>

    <footer class="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="foot-phone">+7 707 377 10 71</div>
                    <div class="foot-email"><a href="mailto:astana@antspro.com">astana@antspro.com</a></div>
                    <button type="button" class="btn btn-warning btn-lg" id="request-call-button-2" data-toggle="modal" data-target="#requestCallModal" ><img src="img/tube.png"> Закажи звонок</button>
                    <div class="copy">
                        ANTSPRO – мобильные решения &copy; 2012-2014
                    </div>
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
            <h3>Заказать звонок</h3>
            <div class="antspro-modal-form">
                <form action="request_call.php" method="post" autocomplete="off" role="form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Введите имя*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Введите email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Введите телефон*" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning warning-black">Заказать</button>
                        </div>
                    </form>
                    <div class="confide-modal">
                         <img src="img/lockicon.png"> Ваши контактные данные в безопасности и не будут переданы третьим лицам
                    </div>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="js/magnific-popup.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var navlink = $('ul.navbar-nav > li > a');
            var collapsizer = $('#collapsizer');

            navlink.click(function(e)
            {
                $('ul.navbar-nav > li').removeClass('active');
                $(this).parent('li').addClass('active');
            });

            function mediaqueryresponse(mql)
            {
                if (mql.matches)
                {
                    //---- hide menu by click outside
                    $('html').click(function(){
                        $('.navbar').hide();
                        $('#collapsizer').show();
                    });
                    collapsizer.click(function(event){
                        event.stopPropagation();
                    });
                    //----

                    $('.navbar').hide();
                    $('#collapsizer').show();

                    navlink.off('click');
                    navlink.click(function(e)
                    {
                        $('ul.navbar-nav > li').removeClass('active');
                        $(this).parent('li').addClass('active');

                        $('#collapsizer').show();
                        $('.navbar').hide();
                    });

                    collapsizer.click(function(){
                        $('.navbar').show();
                        $('#collapsizer').hide();
                    });
                }
                else
                {
                    //hide menu by click outside event remove
                    $('html').off('click');

                    $('.navbar').show();
                    $('#collapsizer').hide();
                    navlink.off('click');
                    navlink.click(function(e)
                    {
                        $('ul.navbar-nav > li').removeClass('active');
                        $(this).parent('li').addClass('active');
                    });
                }
            }
            var mql = window.matchMedia("screen and (max-width: 768px)");
            mediaqueryresponse(mql);
            mql.addListener(mediaqueryresponse);

            //image popups
            $('.gallery-etvans').magnificPopup(
                    {
                        type:'image',
                        closeOnContentClick: true,
                        showCloseBtn: false,
                    }
            );
        });
    </script>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23987518 = new Ya.Metrika({id:23987518, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/23987518" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42109211-3', 'antspro.com');
  ga('send', 'pageview');

</script>
</body>

</html>
