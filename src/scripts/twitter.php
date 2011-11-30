<?php
  /*
   * Twitter api interface
   */
  chdir(dirname(__FILE__));
  date_default_timezone_set('America/Los_Angeles');

  include 'twitter-async/EpiCurl.php';
  include 'twitter-async/EpiOAuth.php';
  include 'twitter-async/EpiTwitter.php';
  include 'twitter-text-php/Autolink.php';
  include 'twitter-text-php/Extractor.php';
  include 'twitter-text-php/HitHighlighter.php';
    

  $key = trim(file_get_contents('secrets/tw-key'));
  $sec = trim(file_get_contents('secrets/tw-sec'));
  $tok = trim(file_get_contents('secrets/tw-tok'));
  $toksec = trim(file_get_contents('secrets/tw-toksec'));
  $tw = new EpiTwitter($key, $sec, $tok, $toksec);

  $resp = $tw->get('/users/show/openphoto.json');
$status = Twitter_Autolink::create($resp->status->text)
  ->setNoFollow(false)
  ->addLinks();

  if($status)
    file_put_contents('output/twitter.txt', $status . '<div class="footnote"><a href="https://twitter.com/OpenPhoto/status/' . $resp->status->id_str . '" target="_blank" rel="external">' . date('h:i \o\n l, M jS', strtotime($resp->status->created_at)) . '</a> from <a href="https://twitter.com/OpenPhoto" target="_blank" rel="external">Twitter</a></div>');
?>
