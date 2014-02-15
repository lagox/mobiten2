<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Расчет стоимости</title>
   <style type="text/css">
   html, body
   {
      height: 100%;
   }
   body
   {
      margin: 0;
      padding: 0;
      background-color: #FFFFFF;
      color: #000000;
   }
   a
   {
      color: #2980b9;
      text-decoration: none;
   }
   a:visited
   {
      color: #2980b9;
   }
   a:active
   {
      color: #2980b9;
   }
   a:hover
   {
      color: #2980b9;
      text-decoration: underline;
   }
   div#space
   {
      width: 1px;
      height: 50%;
      margin-bottom: -383px;
      float:left
   }
   div#container
   {
      width: 1000px;
      height: 766px;
      margin: 0 auto;
      position: relative;
      clear: left;
   }
   </style>
</head>
<body>
   <?php
   if (isset($_POST['name'])) {
      $name = $_POST['name'];
   }
   if (isset($_POST['phone'])) {
      $phone = $_POST['phone'];
   }
   if (isset($_POST['email'])) {
      $email = $_POST['email'];
   }
   
   if (empty($name))
   {
      echo "<div id=\"space\"><br></div>";
      echo "<div id=\"container\">";
      echo "<div id=\"wb_Text1\" style=\"position:absolute;left:240px;top:93px;width:518px;height:108px;text-align:center;z-index:0;\">";
      echo "<span style=\"color:#000000;font-family:'Trebuchet MS';font-size:43px;\">Вы не указали имя!<br /><a href=index.html>Назад</a></span></div>";
      exit;
   }
   else
      if (empty($phone))
      {
         echo "<div id=\"space\"><br></div>";
         echo "<div id=\"container\">";
         echo "<div id=\"wb_Text1\" style=\"position:absolute;left:240px;top:93px;width:518px;height:108px;text-align:center;z-index:0;\">";
         echo "<span style=\"color:#000000;font-family:'Trebuchet MS';font-size:43px;\">Вы не указали номер телефона!<br /><a href=index.html>Назад</a></span></div>";
         exit;
      }
      elseif(empty($email)){
         echo "<div id=\"space\"><br></div>";
         echo "<div id=\"container\">";
         echo "<div id=\"wb_Text1\" style=\"position:absolute;left:240px;top:93px;width:518px;height:108px;text-align:center;z-index:0;\">";
         echo "<span style=\"color:#000000;font-family:'Trebuchet MS';font-size:43px;\">Вы не указали email!<br /><a href=index.html>Назад</a></span></div>";
         exit;
      }
      else
         $to = "astana@antspro.com"; 
      $headers = "Content-type: text/plain; charset = utf-8";
      $subject = "Мобилити: расчет стоимости";
      $message = "Имя пославшего: $name \nТелефон: $phone \nEmail: $email";
      $send = mail ($to, $subject, $message, $headers);
      if ($send == 'true')
      {
         echo "<div id=\"space\"><br></div>";
         echo "<div id=\"container\">";
         echo "<div id=\"wb_Text1\" style=\"position:absolute;left:240px;top:93px;width:518px;height:108px;text-align:center;z-index:0;\">";
         echo "<span style=\"color:#000000;font-family:'Trebuchet MS';font-size:43px;\">Спасибо за Вашу заявку!<br />Мы вам скоро перезвоним.<br /><a href=index.html>Назад</a></span></div>";
      }
      else
      {
         echo "<div id=\"space\"><br></div>";
         echo "<div id=\"container\">";
         echo "<div id=\"wb_Text1\" style=\"position:absolute;left:240px;top:93px;width:518px;height:108px;text-align:center;z-index:0;\">";
         echo "<span style=\"color:#000000;font-family:'Trebuchet MS';font-size:43px;\">Ошибка. Сообщение не отправлено!<br /><a href=index.html>Назад</a></span></div>";
      }
      ?>
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