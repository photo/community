<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The OpenPhoto Project</title>
    <meta name="description" content="The OpenPhoto Project is free open source photo sharing and management software for the web and mobile devices.">
    <meta name="author" content="The OpenPhoto Team">
    <link rel="Shortcut Icon" href="/img/favicon.png">
    <link href="https://plus.google.com/106095380716356658674" rel="publisher" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php if(isset($_GET['debug'])) { ?>
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/styles.css">
    <?php } else { ?>
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/styles.css">
    <?php } ?>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29785237-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

  <body class="<?php echo $bodyClass; ?>">
    <div class="header-bg">
      <div class="container">
        <div class="row" id="header">
          <div class="span4 logo header-logo"><a href="/"></a></div>
          <div class="span2 offset1"><a href="/overview" class="overview">Overview</a></div>
          <div class="span2"><a href="/screenshots" class="screenshots">Screenshots</a></div>
          <div class="span2"><a href="/community" class="community">Community</a></div>
          <div class="span2"><a href="/documentation" class="documentation">Documentation</a></div>
          <!--<div class="span2"><a href="/contribute" class="contribute">Contribute</a></div>-->
          <div class="span2 get-started"><a href="/get-started">Get Started</a></div>
        </div>
      </div>
    </div>
    <div class="content-bg">
      <div class="container">
        <div id="content">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <div class="footer-bg">
      <div class="container">
        <div class="row" id="footer">
          <div class="span6">
            &copy; <?php echo date('Y'); ?> <a href="/team">The OpenPhoto Project Team</a> | <a href="mailto:hello@openphoto.me">hello@openphoto.me</a>
          </div>
          <div class="span2 offset1">
            <div class="fb-like" data-href="http://www.facebook.com/openphoto" data-send="false" data-layout="button_count" data-show-faces="false"></div>
          </div>
          <div class="span3">
            <a href="https://plus.google.com/106095380716356658674?prsrc=3" style="text-decoration:none;" title="OpenPhoto on Google+"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" alt="OpenPhoto on Google+" style="border:0;width:16px;height:16px;"/></a>
            <g:plusone size="medium"></g:plusone>
          </div>
          <div class="span2">
            <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-url="http://theopenphotoproject.org" data-via="OpenPhoto">Tweet</a>
          </div>
        </div>
      </div>
    </div>

    <script src="/js/jquery-1.7.1.js"></script>
    <script src="/js/jquery.history.js"></script>
    <script src="/js/jquery.colorbox-min.js"></script>
    <script src="/js/openphoto.js"></script>
    <script>
      OP.init(
        {
          'click:headline-carousel': OP.handler.headlineCarousel,
          'mouseover:headline-carousel': OP.handler.headlineCarousel
        }
      );
      $("a.screenshot-link:not(.cboxElement)").colorbox({rel:'screenshots',loop:false});
    </script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=283425805036236";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
  </body>
</html>
