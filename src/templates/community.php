<h1>Community discussions and feature requests</h1>

<div class="row">
  <div class="span10">
    <p>
      <h2>Discussions and feature requests</h2>
      <ul class="unstyled forum">
        <?php foreach($uservoice['items'] as $item) { ?>
          <li>
            <div class="row">
              <div class="span1">
                <div class="votebox">
                  <?php echo $item['votes']; ?>
                  <div>votes</div>
                </div>
              </div>
              <div class="span9 votetitle">
                <a href="<?php echo $item['url']; ?>" rel="external" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
              </div>
          </li>
        <?php } ?>
      </ul>
      <a href="https://openphoto.uservoice.com">View more discussions</a>
    </p>
  </div>
  <div class="span5">
    <p>
      <h2>What people are saying</h2>
      <ul class ="unstyled favorites">
        <?php foreach($twitterFavorites as $tweet) { ?>
          <li>
            <div class="row">
              <div class="span1">
                <img src="<?php echo $tweet['profile_image']; ?>">
              </div>
              <div class="span4">
                <?php echo $tweet['status']; ?>
              </div>
            </div>
            <div class="footnote">By <a href="https://twitter.com/<?php echo $tweet['user']; ?>">@<?php echo $tweet['user']; ?></a> at <a href="<?php echo $tweet['url']; ?>"><?php echo $tweet['time']; ?></a></div>
          </li>
        <?php } ?>
      </ul>
      <a href="https://twitter.com/openphoto/favorites">View more tweets</a>
    </p>
  </div>
</div>
