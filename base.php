<?php
    $access_allowed = True;
    require_once("dconframe/init.php");
    DconFrame::init();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="User Experience Design, Conference, Event, Brighton, Clearleft">
    <meta name="description" content="dConstruct is an affordable, one-day conference aimed at those building the latest generation of websites. The event discusses how to design websites that not only work, but are an enjoyable experience for the user.">

    <meta name="geo.position" content="50.8234;-0.1382">
    <meta name="ICBM" content="50.8234,-0.1382">

    <meta name="viewport" content="width=450">

    <link rel="alternate" type="application/rss+xml" title="dConstruct 2010 Podcast" href="http://huffduffer.com/dConstruct/tags/dconstruct2010/rss">
    <link rel="alternate" type="application/rss+xml" title="Clearleft Events" href="http://feeds.feedburner.com/ClearleftEvents">
    <link rel="alternate" type="application/atom+xml" title="dConstruct Latest News" href="http://lukearno.com/projects/hatom2atom?url=http://2010.dconstruct.org">
    <!--<link rel="alternate" type="application/rss+xml" title="dConstruct 2010 podcast" href="http://huffduffer.com/dConstruct/tags/dconstruct10">-->

    <link rel="profile" href="http://microformats.org/profile/hcalendar">
    <link rel="profile" href="http://microformats.org/profile/hcard">
    <link rel="profile" href="http://microformats.org/profile/hatom">

    <title><?php echo DconFrame::get_title(True) ?></title>

    <!--[if lte IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo DconFrame::$media_url_1; ?>/c/public/core.zip.css?<?php echo DconFrame::$media_version; ?>" media="screen">
    <!-- For those interested, here's an unminified version of the CSS: <?php echo DconFrame::$media_url_1; ?>/c/s/core.css -->

    <!-- Some overrides and bug fixes for IE -->
    <!--[if lte IE 6]>
    <link rel="stylesheet" href="<?php echo DconFrame::$media_url_2; ?>/c/public/ie6.css?<?php echo DconFrame::$media_version; ?>" media="screen">
    <![endif]-->

</head>
<body id="<?php echo DconFrame::get_page_id(); ?>" <?php if(DconFrame::$tickets_for_sale): ?> class="tickets-available"<?php endif; ?>>
<div class="overflow-catch">

<nav class="site-nav" role="navigation">
<?php include("includes/main-nav.php"); ?>
</nav>

    <div class="recep">
        <header class="vevent" role="banner">
            <hgroup>
                <h1><a href="/" rel="home"><img src="<?php echo DconFrame::$media_url_1; ?>/i/logo.png?<?php echo DconFrame::$media_version; ?>" alt="dConstruct 2010" class="summary"></a></h1>
                <h2><time datetime="2010-09-03"><abbr class="dtstart" title="2010-09-03">3rd September 2010</abbr></time><a href="/location" class="location">Brighton, England</a></h2>
            </hgroup>
        </header>
        <div id="tile-container" class="tile-container">
            <?php echo DconFrame::get_page_tiles(); ?>
        </div><!-- /.tile-container -->

        <div class="main" role="main">
            <?php echo DconFrame::get_page_content(); ?>
        </div><!-- /.main -->

        <?php if ($_GET['page'] == 'speakers') { ?>
        <div class="secondary">
            <?php include("includes/speaker-list.php") ?>
        </div>
        <?php } ?>

        <section class="register">
            <?php if(False): ?>
            <h2 class="register-now"><a href="<?php echo DconFrame::$register_url ?>" class="action">Register Now!</a></h2>
            <?php else: ?>
            <h2 class="register-now"><span class="action">Sold Out!</span></h2>
            <?php endif; ?>
            <p class="price"><strong>&pound;125</strong> + VAT</p>
        </section>

        <div class="meta-boiler" role="complementary">
            <aside class="sponsors">
                <div class="container">
                    <h2>Sponsors</h2>
                    <h3>Premier Sponsors</h3>
                    <a href="http://www.mailchimp.com/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/mailchimp.png?<?php echo DconFrame::$media_version; ?>" alt="Mailchimp"></a>
                    <h3>Executive Sponsors</h3>
                    <a href="http://www.microsoft.com/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/microsoft.png?<?php echo DconFrame::$media_version; ?>" alt="Microsoft"></a>
                    <a href="https://www.x.com/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/paypal.png?<?php echo DconFrame::$media_version; ?>" alt="Paypal"></a>
                    <a href="http://www.lbi.com/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/lbi.png?<?php echo DconFrame::$media_version; ?>" alt="LBi"></a>
                    <h3>Media Sponsors</h3>
                    <a href="http://www.netmag.co.uk/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/dotnet.png?<?php echo DconFrame::$media_version; ?>" alt=".Net"></a>
                    <a href="http://fontdeck.com/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/fontdeck.png?<?php echo DconFrame::$media_version; ?>" alt="Fontdeck" style="margin-bottom:-6px;"></a>
                    <a href="http://mediatemple.net/"><img src="<?php echo DconFrame::$media_url_1; ?>/i/sponsors/mt.png?<?php echo DconFrame::$media_version; ?>" alt="MediaTemple" style="margin-bottom:2px;"></a>
                    <p>Interested in becoming a sponsor? We have a number of different packages to suit your business needs.</p>
                    <p><a href="<?php echo DconFrame::$media_url_1; ?>/assets/dconstruct-2010-sponsorship.pdf">Download our information pack (3.8Mb PDF)</a> for more information.</p>
                </div>
            </aside>
            <aside class="updated">
                <div class="container">
                    <h2>Keep Updated</h2>
                    <ul class="social">
                        <li class="facebook"><a href="http://www.facebook.com/group.php?gid=8114284346">Join</a> dConstruct <span class="type">on Facebook</span></li>
                        <li class="twitter"><a href="http://twitter.com/dconstruct">Follow</a> @dConstruct <span class="type">on Twitter</span></li>
                        <li class="subscribe"><a href="http://feeds.feedburner.com/clearleftevents">Subscribe</a> to the Clearleft <span class="type">events feed</span></li>
                        <li class="calendar">Add this event to your <span class="type">calendar: <a href="webcal://h2vx.com/ics/<?php echo $_SERVER["HTTP_HOST"] ?>/schedule">+ iCal</a></li>
                    </ul>
                </div>
            </aside>
        </div>



    </div><!-- /.recep -->
    <nav class="meta-nav">
        <ul>
            <li><a href="/" rel="home">Home</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
            <li><a href="/terms">Terms and Conditions</a></li>
            <li><a href="/accessibility" rel="accessibility">Accessibility</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <footer class="vcard">
        <p class="lead adr">Presented by Clearleft, a user experience design consultancy based in <span class="locality">Brighton</span>, <abbr class="country-name" title="United Kingdom">UK</abbr>.</p>
        <a href="http://clearleft.com" class="url"><img src="<?php echo DconFrame::$media_url_1; ?>/i/cl-logo.png?<?php echo DconFrame::$media_version; ?>" alt="Clearleft" class="photo fn org"></a>
        <p>We make websites, and in our spare time we like to give something back to the web design community by running dConstruct. It&#8217;s a grass-roots conference that gathers some of the brightest minds in the industry from around the world, and brings them to our little home by the sea for a cup of tea and a slice of cake.</p>
        <p role="contentinfo"><small>dConstruct &copy; 2010 Clearleft Limited. All rights reserved</small></p>
    </footer>
</div><!-- /.overflow-catch -->
<?php if ($_GET["page"] == "location"): ?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php endif; ?>
<script src="<?php echo DconFrame::$media_url_1; ?>/j/core.min.zip.js?<?php echo DconFrame::$media_version; ?>"></script>
<script src="http://dconstruct.s3.amazonaws.com/js/dconstruct-status.js"></script>
</body>
</html>
