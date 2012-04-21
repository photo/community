<div class="row" id="headline">
  <div class="row first">
    <div class="span5">
      <ul class="unstyled links">
        <li class="first"><a href="/overview" class="headline-carousel">Take back your photos</a></li>
        <li class="second"><a href="/get-started" class="headline-carousel">Free, open and easy to use</a></li>
        <li class="third"><a href="/documentation" class="headline-carousel">Flexible API &amp; apps</a></li>
      </ul>
      <a href="/get-started" class="https://openphoto.me">Get started!</a>
    </div>
    <div class="span5 message">
      <div class="first span6">
        <h1>All your photos in one spot. Wherever you'd like.</h1>
        <div class="span5">
          A photo application that lets <em>you</em> store <em>your</em> photos on Dropbox, Amazon S3 or in your garage. <a href="/overview">See the difference <span class="raquo">&raquo;</span></a>
        </div>
      </div>
      <div class="second span6">
        <h1>Install it yourself or sign up for a hosted account.</h1>
        <div class="span5">
          We've made it easy to get started. Sign up for an account or follow our detailed installation guides. <a href="/get-started">Get started now <span class="raquo">&raquo;</span></a>
        </div>
      </div>
      <div class="third span6">
        <h1>Use our beautiful API and build awesome apps.</h1>
        <div class="span5">
          What good is being open and free if you can't make it do what you want? <a href="/documentation">Read the API docs <span class="raquo">&raquo;</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" id="secondary">
  <div class="span-one-third social">
    <div>
      <h2>A growing community</h2>
      <ul class="media-grid unstyled themes">
        <li class="span1"><a href="https://twitter.com/openphoto" target="_blank" rel="external"><img src="/img/icon-tw.png"></a></li>
        <li class="span1"><a href="http://www.facebook.com/OpenPhoto" target="_blank" rel="external"><img src="/img/icon-fb.png"></a></li>
        <li class="span1"><a href="https://github.com/openphoto/frontend" target="_blank" rel="external"><img src="/img/icon-gh.png"></a></li>
        <li class="span1"><a href="http://www.youtube.com/user/OpenPhotoProject" target="_blank" rel="external"><img src="/img/icon-yt.png"></a></li>
      </ul>
      <?php echo $twitterStatus; ?>
    </div>
  </div>
  <div class="span-one-third">
    <div>
      <h2>Feature requests &amp; questions</h2>
      <?php if(count($uservoice['items']) > 0) { ?>
        <ul class="unstyled forum">
          <?php foreach($uservoice['items'] as $cnt => $item) { ?>
            <li><a href="<?php echo $item['url']; ?>" target="_blank" rel="external" title="<?php echo $item['title']; ?>"><?php echo $item['titlefmt']; ?></a></li>
            <?php if($cnt > 6) break; ?>
          <?php } ?>
        </ul>
      <?php } ?>
      <div class="footnote">Over <?php echo $uservoice['total']; ?> discussions going on</div>
      <a href="http://openphoto.uservoice.com" target="_blank" rel="external">View all feature requests &amp; questions <span class="raquo">&raquo;</span></a>
    </div>
  </div>
  <div class="span-one-third">
    <div>
      <h2>Robert Scoble interviews Jaisen</h2>
      <iframe width="275" height="150" src="http://www.youtube.com/embed/nEDnms98T-Q" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="row" id="ternary">
  <div class="span-one-third">
    <div>
      <h2>Mobile apps</h2>
      <p>
        OpenPhoto apps will soon be available for both iOS and Android - giving you the power to share and upload photos from wherever you are, anytime!
      </p>
      <p>
        Stay tuned! Mobile apps for iPhone and Android are coming soon!
      </p>
    </div>
  </div>
  <div class="span-one-third">
    <div>
      <h2>Latest commits</h2>
      <?php if(is_array($github['commits'])) { ?>
        <table class="condensed-table commits">
          <?php foreach($github['commits'] as $commit) { ?>
            <tr>
              <td><?php echo $commit['timefmt']; ?></td>
              <td><?php echo $commit['name']; ?></td>
              <td><a href="https://github.com<?php echo $commit['url']; ?>" target="_blank" rel="external" title="<?php echo $commit['message']; ?>"><?php echo $commit['messagefmt']; ?></a></td>
            </tr>
          <?php } ?>
        </table>
      <?php } ?>
      <?php if(is_array($github['info'])) { ?>
        <div class="footnote">
          <?php echo $github['info']['watchers']; ?> watchers, <?php echo $github['info']['forks']; ?> clones and <?php echo $github['info']['issues']; ?> open issues
        </div>
      <?php } ?>
      <a href="https://github.com/openphoto/frontend" target="_blank" rel="external">Git on over to Github <span class="raquo">&raquo;</span></a>
    </div>
  </div>
  <div class="span-one-third press">
    <div>
      <h2>Press and support</h2>
      <a href="http://techcrunch.com/2011/06/29/former-yahoo-engineer-quits-to-build-a-flickr-killer-on-kickstarter/" title="OpenPhoto on Techcrunch" rel="external" target="_blank"><img src="/img/techcrunch-logo.jpg"></a>
      <a href="http://www.readwriteweb.com/archives/save_your_photos_to_amazon_or_dropbox_with_app_pla.php" title="OpenPhoto on Read Write Web" rel="external" target="_blank"><img src="/img/read-write-web-logo.jpg"></a>
      <a href="http://thenextweb.com/dd/2011/07/16/creating-a-portable-web-when-your-data-is-truly-yours/" title="OpenPhoto on The Next Web"rel="external" target="_blank"><img src="/img/the-next-web-logo.png"></a>
      <a href="http://www.theatlantic.com/technology/archive/2012/01/the-startup-challenging-the-centralized-internet/250008/" title="OpenPhoto on The Atlantic"rel="external" target="_blank"><img src="/img/the-atlantic-logo.jpg"></a>
      <a href="http://blog.webfwd.org/post/9300091721/webfwd-welcomes-the-first-fellows" title="The OpenPhoto on Mozilla WebFWD" rel="external" target="_blank"><img src="img/webfwd.png" class="webfwd"></a>
    </div>
  </div>
</div>
