<?php 
include_once 'dealers.php'; 

$current_day = date("N");
$current_hour = date("G");
$current_minute = date("i");

$nr_telefon = '';

if ( (!in_array($current_day, array(6,7))) &&
(($current_hour >= 9) &&
(($current_hour < 17) || ($current_hour = 17 && $current_minute < 30)))
) {
    $nr_telefon = '0212077756';
} else {
    $nr_telefon = '0731610272';
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="ro"> <![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ro"> <![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ro"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ro"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Peugeot 2008</title>
        <meta name="description" content="Daca nu ai tichet Remat, Peugeot iti face cadou contravaloarea unuia">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="screen-2">
        <div class="center">
            <header class="header">
                <a class="btn btn-primary call" data-call href="tel:<?= $nr_telefon ?>">
                    <svg viewBox="0 0 24 24"><path d="M6.028,10.661c1.6,3.145,4.172,5.717,7.322,7.316l2.445-2.45c0.305-0.305,0.744-0.395,1.127-0.271c1.244,0.41,2.584,0.633,3.967,0.633C21.506,15.889,22,16.383,22,17v3.889C22,21.506,21.506,22,20.889,22C10.456,22,2,13.545,2,3.111C2,2.495,2.5,2,3.111,2H7c0.617,0,1.111,0.495,1.111,1.111c0,1.383,0.222,2.722,0.633,3.966C8.867,7.461,8.778,7.9,8.472,8.206L6.028,10.661z"></path></svg>
                    <span>Click to call</span>
                </a>
            </header>
            <div class="car"></div>
            <img src="images/title.png" class="title">
            <section class="stamps">
                <img src="images/stamp-right.png">
            </section>
            <section class="form-block">
                <p class="msg-feedback bg-success text-sm"><b>Datele tale au fost salvate!</b> Vei fi contactat in cel mai scurt timp, intre timp afla mai multe detalii mai jos.</p>
            </section>
            <section class="links">
                <a class="btn btn-primary" id="discover" href="http://ofertelespecialepeugeot.trustmotors.ro/" target="_blank"><span>Descoperă Ofertele Speciale</span></a>
                <a class="btn btn-primary call" href="tel:<?= $nr_telefon ?>">
                    <svg viewBox="0 0 24 24"><path d="M6.028,10.661c1.6,3.145,4.172,5.717,7.322,7.316l2.445-2.45c0.305-0.305,0.744-0.395,1.127-0.271c1.244,0.41,2.584,0.633,3.967,0.633C21.506,15.889,22,16.383,22,17v3.889C22,21.506,21.506,22,20.889,22C10.456,22,2,13.545,2,3.111C2,2.495,2.5,2,3.111,2H7c0.617,0,1.111,0.495,1.111,1.111c0,1.383,0.222,2.722,0.633,3.966C8.867,7.461,8.778,7.9,8.472,8.206L6.028,10.661z"></path></svg>
                    <span>Click to call</span>
                </a>
            </section>
            <footer class="footer">
                <p>Ofertă supusă unor termene şi condiţii, valabilă în limita stocului disponibil. Preţ valabil pentru 2008 Active 1,2 82CP.</p>
            </footer>
        </div>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/general.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-73017822-1', 'auto');
          ga('send', 'pageview');

        </script>

        <!-- Google Code for Remarketing Tag -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 948897827;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/948897827/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '711482928910064');
        fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=711482928910064&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '461638957360620');
        fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=461638957360620&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: Peugeot_2008_ThankYouPage
        URL of the webpage where the tag is expected to be placed: http://on.1616.ro/peugeot/peugeot2008/thankyou.php
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 01/28/2016
        -->
        <script type="text/javascript">
        var axel = Math.random() + "";
        var a = axel * 10000000000000;
        document.write('<iframe src="https://4808169.fls.doubleclick.net/activityi;src=4808169;type=conve0;cat=peuge002;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
        <iframe src="https://4808169.fls.doubleclick.net/activityi;src=4808169;type=conve0;cat=peuge002;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of DoubleClick Floodlight Tag: Please do not remove -->

        <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/78-8208.js?id=8208&m=78")</script>

        <!-- Facebook Conversion Code for Peugeot 2008_ian-feb2016 -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6036391473003', {'value':'0.00','currency':'USD'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6036391473003&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

        <!-- Facebook Conversion Code for Peugeot 2008 Crossover ian-feb2016 -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6046574303282', {'value':'0.00','currency':'EUR'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6046574303282&amp;cd[value]=0.00&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>

        <!-- Google Code for Peugeot 2008 Crossover ian-feb2016 Conversion Page -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 948897827;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "actsCO3swWMQo5C8xAM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/948897827/?label=actsCO3swWMQo5C8xAM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>

        <img src="https://sp.analytics.yahoo.com/spp.pl?a=1000335867555&.yp=436609"/>

    </body>
</html>