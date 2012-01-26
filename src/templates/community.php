<h1>Community discussions and feature requests</h1>

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
          <div class="span15 votetitle">
            <a href="<?php echo $item['url']; ?>" target="_blank" rel="external" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
          </div>
      </li>
    <?php } ?>
  </ul>
  <a href="https://openphoto.uservoice.com">View all discussions</a>
</p>

