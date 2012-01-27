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

  $resp = $tw->get('/favorites.json');
  //var_dump($resp->response);
  $output = array();
  foreach($resp as $tweet)
  {
    $status = Twitter_Autolink::create($tweet->text)
            ->setNoFollow(false)
            ->addLinks();
    $url = 'https://twitter.com/'.$tweet->user->screen_name.'/status/'.$tweet->id_str;
    $output[] = array('status' => $status, 'user' => $tweet->user->screen_name, 'url' => $url, 'profile_image' => $tweet->user->profile_image_url, 'time' => date('h:i \o\n l, M jS', strtotime($tweet->created_at)));
  }

  if(!empty($output))
    file_put_contents('output/twitter-favorites.json', json_encode($output));
