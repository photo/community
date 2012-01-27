<?php
class ApiController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function community()
  {
    $dir = dirname(dirname(dirname(__FILE__)));
    $favorites = json_decode(file_get_contents(sprintf('%s/scripts/output/twitter-favorites.json', $dir)), 1);
    $uservoice = json_decode(file_get_contents(sprintf('%s/scripts/output/uservoice.json', $dir)), 1);
    $content = getTemplate()->get('community.php', array('uservoice' => $uservoice, 'twitterFavorites' => $favorites));
    return $this->envelope($content, 'community');
  }

  public function contribute($page = null)
  {
    if($page === null)
    {
      $page = 'Readme.markdown';
      $name = 'home';
    }
    else
    {
      $name = $page;
      $page .= '.markdown';
    }


    $documentationFile = sprintf('%s/external/openphoto-frontend/documentation/contribute/%s', dirname(dirname(__FILE__)), $page);
    $contribute = Markdown(file_get_contents($documentationFile));
    $content = getTemplate()->get('contribute.php', array('contribute' => $contribute, 'name' => $name));
    return $this->envelope($content, 'contribute');
  }

  public function documentation()
  {
    $params = array('name' => 'documentation', 'documentation' => getTemplate()->get('documentationHome.php'));
    $content = getTemplate()->get('documentation.php', $params);
    return $this->envelope($content, 'documentation');
  }

  public function documentationApi($api)
  {
    $documentationFile = sprintf('%s/external/openphoto-frontend/documentation/api/%s.markdown', dirname(dirname(__FILE__)), $api);
    $params = array('name' => $api, 'documentation' => Markdown(file_get_contents($documentationFile)));
    $content = getTemplate()->get('documentation.php', $params);
    return $this->envelope($content, 'documentation');
  }

  public function documentationFaq($api)
  {
    $documentationFile = sprintf('%s/external/openphoto-frontend/documentation/faq/%s.markdown', dirname(dirname(__FILE__)), $api);
    $params = array('name' => $api, 'documentation' => Markdown(file_get_contents($documentationFile)));
    $content = getTemplate()->get('documentation.php', $params);
    return $this->envelope($content, 'documentation');
  }

  public function documentationGuide($api)
  {
    $documentationFile = sprintf('%s/external/openphoto-frontend/documentation/guides/%s.markdown', dirname(dirname(__FILE__)), $api);
    $params = array('name' => $api, 'documentation' => Markdown(file_get_contents($documentationFile)));
    $content = getTemplate()->get('documentation.php', $params);
    return $this->envelope($content, 'documentation');
  }

  public function documentationSchemas($api)
  {
    $documentationFile = sprintf('%s/external/openphoto-frontend/documentation/schemas/%s.markdown', dirname(dirname(__FILE__)), $api);
    $params = array('name' => $api, 'schema' => Markdown(file_get_contents($documentationFile)));
    $content = getTemplate()->get('schema.php', $params);
    return $this->envelope($content, 'documentation');
  }

  public function getStarted()
  {
    $content = getTemplate()->get('get-started.php');
    return $this->envelope($content, 'get-started');
  }

  public function error404($page)
  {
    $content = getTemplate()->get('error404.php', array('page' => $page));
    return $this->envelope($content, 'error-404');
  }

  public function home()
  {
    $dir = dirname(dirname(dirname(__FILE__)));
    $twitterStatus = file_get_contents(sprintf('%s/scripts/output/twitter.txt', $dir));
    $github= json_decode(file_get_contents(sprintf('%s/scripts/output/github.json', $dir)), 1);
    $uservoice= json_decode(file_get_contents(sprintf('%s/scripts/output/uservoice.json', $dir)), 1);
    $params = array(
      'twitterStatus' =>$twitterStatus,
      'github' => $github,
      'uservoice' => $uservoice
    );
    $content = getTemplate()->get('home.php', $params);
    return $this->envelope($content, 'home');
  }

  public function overview()
  {
    $content = getTemplate()->get('overview.php');
    return $this->envelope($content, 'overview');
  }

  public function team()
  {
    $content = getTemplate()->get('team.php');
    return $this->envelope($content, 'team');
  }

  private function envelope($content, $bodyClass = null)
  {
    $response = array();
    $response['content'] = $content;
    $response['bodyClass'] = $bodyClass;
    return $this->success(null, $response);
  }
}
