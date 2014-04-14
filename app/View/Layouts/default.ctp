<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <link type="text/css" href="/css/skitter.styles.css" media="all" rel="stylesheet" />

        <?php
        echo $this->Html->meta('/img/icon.png');
        echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'chili', 'bck', 'lightbox'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/jquery.collapse.js"></script>
        <script type="text/javascript" src="/js/chili.js"></script>

        <script type="text/javascript" src="/js/lightbox-2.6.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



    </head>

    <body>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-48144355-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <?php echo $this->Session->flash(); ?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/travels/home">Chili tours</a>

                    <div class="nav-collapse collapse" id="main-menu">
                        <ul class="nav">
                            <li><a href="/pages/aboutus">O nama</a></li>
                            <li><a href="/accomodations/home">Smještaj</a></li>
                            <li><a href="/contacts/aviotickets">Avio karte</a></li>
                            <li><a href="/pages/chilioaza">Chili Oaza</a></li>
                            <li><a href="http://putovanjasazacinom.blogspot.com/">Blog</a></li>
                            <li><a href="/contacts/contact">Kontakt</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li><a href="/contacts/contact" style="font-size:20px;">Tel: 01 483 98 54</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div> <!-- /container -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="fwidget">
                            <div class="contact">
                                <h4>Kontaktirajte nas</h4>
                                <hr>
                                <h5> <i class="icon-home"></i> Augusta Šenoe 8/II</h5>
                                <hr>
                                <h5><i class="icon-bell"></i> +385 01 483 98 54</h5>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#">  info@chilitours.hr</a>
                                <hr>
                                <h5>OIB: 77148788978</h5>
                                <hr>
                                <h5>Id kod: HR-AB-01-080880298</h5>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="contact">
                            <h4>Radno vrijeme</h4>
                            <hr>
                            <h5>Pon-Pet 9.00 - 17.00</h5>
                            <hr>
                            <h5>Subota 9.00 - 13.00</h5>

                        </div>
                    </div>					
                    <div class="span3">
                        <div class="categories">
                            <h4>Site map</h4>
                            <hr>
                            <a href="/">Početna</a><br>
                            <a href="/pages/aboutus">O nama</a><br>
                            <a href="/accomodations/home">Smještaj</a><br>
                            <a href="/pages/chilioaza">Chili Oaza</a><br>
                            <a href="http://putovanjasazacinom.blogspot.com/">Blog</a><br>
                            <a href="/contacts/contact">Kontakt</a><br>
                            <a href="/contacts/travelcreate">Kreiraj putovanje</a><br>

                        </div>
                    </div>
                    <div class="span3">
                        <div class="categories">
                            <h4>Info</h4>
                            <hr>
                            <a href="/travels/index">Admin Login</a><br>
                            <a href="/pages/terms">Opći uvjeti putovanja</a><br>
                            <a href="/pages/paymenttypes">Naćini plaćanja</a><br>
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.skitter.js"></script>
    <script type="text/javascript" src="/js/jquery.animate-colors-min.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
</html>








