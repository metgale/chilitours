<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <script src="/js/jquery.js"></script>
        <script src="/js/chili.js"></script>
        <link type="text/css" href="/css/skitter.styles.css" media="all" rel="stylesheet" />

        <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="/js/jquery.animate-colors-min.js"></script>
        <script type="text/javascript" src="/js/jquery.skitter.js"></script>
        <script type="text/javascript" src="/js/lightbox-2.6.min.js"></script>
        <script type="text/javascript" src="/js/jquery.collapse.js"></script>


        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'chili', 'bck', 'lightbox'));
        echo $this->Html->script('bootstrap.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">



        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>

    <body>
        <?php echo $this->Session->flash(); ?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=504254712997776";
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
                    <a class="brand" href="/travels/home">Chili Tours</a>

                    <div class="nav-collapse collapse" id="main-menu">
                        <ul class="nav" id="main-menu">
                            <li><a href="/pages/aboutus">O nama</a></li>
                            <li><a href="/pages/b2b">B2B</a></li>
                            <li><a href="/pages/chilioaza">Chili Oaza</a></li>
                            <li><a href="/blogs/home">Blog</a></li>
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
                                <h5> <i class="icon-home"></i> Augusta Šenoe 8</h5>
                                <hr>
                                <h5><i class="icon-bell"></i> +385 01 483 98 54</h5>
                                <hr>
                                <i class="icon-envelope"></i> <a href="#">  info@chilitours.hr</a>
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
                            <a href="/pages/b2b">B2B</a><br>
                            <a href="/pages/chilioaza">Chili Oaza</a><br>
                            <a href="/blogs/home">Blog</a><br>
                            <a href="/contacts/contact">Kontakt</a><br>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="categories">
                            <h4>Info</h4>
                            <hr>
                            <a href="/pages/terms">Opći uvjeti poslovanja</a><br>
                            <a href="/pages/paymenttypes">Načini plaćanja</a><br>
                            <a href="/travels/index">Admin login</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>








