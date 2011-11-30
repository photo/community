<div class="row" id="headline">
  <div class="row first">
    <div class="span5">
      <ul class="unstyled links">
        <li class="first"><a href="/overview" class="headline-carousel">Take back your photos</a></li>
        <li class="second"><a href="/get-started" class="headline-carousel">Free, open and easy to use</a></li>
        <li class="third"><a href="/documentation" class="headline-carousel">Flexible API &amp; apps</a></li>
      </ul>
      <a href="" class="get-started">Get started!</a>
    </div>
    <div class="span5 message">
      <div class="first span6">
        <h1>100% photo liberation, guaranteed!</h1>
        <div class="span5">
          Finally, a photo sharing app that gives <em>you</em> complete control over <em>your</em> photos. <a href="/overview">See the difference <span class="raquo">&raquo;</span></a>
        </div>
      </div>
      <div class="second span6">
        <h1>Installable and hosted versions.</h1>
        <div class="span5">
          We've got detailed installation guides and a hosted version for those who don't want the hassle. <a href="/get-started">Get started now <span class="raquo">&raquo;</span></a>
        </div>
      </div>
      <div class="third span6">
        <h1>Use our beautiful API and build awesome apps.</h1>
        <div class="span5">
          What good is being open and free if you can't make it do what you want? <a href="/documentation">Read our API docs <span class="raquo">&raquo;</span></a>
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
        <li class="span1"><a href="https://twitter.com/openphoto" target="_blank" rel="external"><img src="img/icon-tw.png"></a></li>
        <li class="span1"><a href="http://www.facebook.com/OpenPhoto" target="_blank" rel="external"><img src="img/icon-fb.png"></a></li>
        <li class="span1"><a href="https://github.com/openphoto/frontend" target="_blank" rel="external"><img src="img/icon-gh.png"></a></li>
        <li class="span1"><a href="http://www.youtube.com/" target="_blank" rel="external"><img src="img/icon-yt.png"></a></li>
      </ul>
      <?php echo $twitterStatus; ?>
    </div>
  </div>
  <div class="span-one-third">
    <div>
      <h2>Feature requests &amp; questions</h2>
      <?php if(count($uservoice['items']) > 0) { ?>
        <ul class="unstyled forum">
          <?php foreach($uservoice['items'] as $item) { ?>
            <li><a href="<?php echo $item['url']; ?>" target="_blank" rel="external" title="<?php echo $item['title']; ?>"><?php echo $item['titlefmt']; ?></a></li>
          <?php } ?>
        </ul>
      <?php } ?>
      <div class="footnote">Over <?php echo $uservoice['total']; ?> discussions going on</div>
      <a href="http://openphoto.uservoice.com" target="_blank" rel="external">View all feature requests &amp; questions <span class="raquo">&raquo;</span></a>
    </div>
  </div>
  <div class="span-one-third">
    <div>
      <h2>Beautiful themes</h2>
      <ul class="media-grid unstyled themes">
        <li class="span-half"><img src="img/90x90.gif"</li>
        <li class="span-half"><img src="img/90x90.gif"</li>
      </ul>
      <a href="">View all themes <span class="raquo">&raquo;</span></a>
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
        Stay tuned for when the moble apps for iPhone and Android will be available!
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
  <div class="span-one-third">
    <div>
      <h2>We want you!</h2>
      Programmers, front-end developers, designers - help make OpenPhoto the best, most flexible photo-sharing software around. <a href="">See how you can help <span class="raquo">&raquo;</span></a>
      <img src="img/webfwd.png" class="webfwd">
    </div>
  </div>
</div>
