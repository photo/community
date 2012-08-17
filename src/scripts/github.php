<?php
  /*
   * Github api interface
   */
  chdir(dirname(__FILE__));
  date_default_timezone_set('America/Los_Angeles');

  $gUrl = 'http://github.com/api/v2/json';
  $repoUrl = "{$gUrl}/repos/show/photo/frontend";
  $commitsUrl = "{$gUrl}/commits/list/photo/frontend/development";
  $ch = curl_init($repoUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $repoJson = curl_exec($ch);
  curl_close($ch);
  $ch = curl_init($commitsUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $commitsJson = curl_exec($ch);
  $repo = json_decode($repoJson, 1);
  $repo = $repo['repository'];
  $commits = json_decode($commitsJson, 1);
  if(empty($repo) || empty($commits['commits']))
    die();

  $out = array();
  $out['info'] = array(
    'watchers' => $repo['watchers'],
    'issues' => $repo['open_issues'],
    'forks' => $repo['forks']
  );
  $out['commits'] = array();
  foreach($commits['commits'] as $cnt => $commit)
  {
    if($cnt > 4)
      break;

    $time = strtotime($commit['committed_date']);
    if($time < strtotime('Today'))
      $timefmt = date('m/d/y', $time);
    else
      $timefmt = date('g:ia', $time);

    $out['commits'][] = array(
      'message' => htmlspecialchars($commit['message']),
      'messagefmt' => htmlspecialchars(substr($commit['message'], 0, 15)).'...',
      'name' => $commit['author']['login'],
      'email' => $commit['author']['email'],
      'time' => $time,
      'timefmt' => $timefmt,
      'url' => $commit['url']
    );
  }

  if(count($out['commits']) > 0)
    file_put_contents('output/github.json', json_encode($out));
?>
