<?php
  /*
   * Uservoice api interface
   */
  chdir(dirname(__FILE__));
  date_default_timezone_set('America/Los_Angeles');
    

  $key = trim(file_get_contents('secrets/uv-key'));
  $ch = curl_init("http://openphoto.uservoice.com/api/v1/forums/141441/suggestions.json?client={$key}&per_page=25&sort=top");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $resp = json_decode(curl_exec($ch), 1);

  $out = array('items' => array(), 'total' => intval($resp['response_data']['total_records']));
  foreach($resp['suggestions'] as $cnt => $sugg)
  {
    $out['items'][] = array(
      'votes' => $sugg['vote_count'],
      'created' => strtotime($sugg['created_at']),
      'title' => htmlspecialchars($sugg['title']),
      'titlefmt' => htmlspecialchars(substr($sugg['title'], 0, 35) . (strlen($sugg['title']) > 35 ? '...' : '')),
      'url' => $sugg['url']
    );
  }

  if(count($out) > 0)
    file_put_contents('output/uservoice.json', json_encode($out));
?>
