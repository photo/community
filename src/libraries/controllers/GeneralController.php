<?php
class GeneralController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
  }

  public function community()
  {
    $envelope = getApi()->invoke('/community.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function contribute($page = null)
  {
    if($page !== null)
      $page = "/{$page}";
    $envelope = getApi()->invoke("/contribute{$page}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function documentation()
  {
    $envelope = getApi()->invoke('/documentation.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function documentationApi($api)
  {
    $envelope = getApi()->invoke("/documentation/api/{$api}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function documentationFaq($api)
  {
    $envelope = getApi()->invoke("/documentation/faq/{$api}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function documentationGuide($api)
  {
    $envelope = getApi()->invoke("/documentation/guide/{$api}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function documentationSchemas($api)
  {
    $envelope = getApi()->invoke("/documentation/schemas/{$api}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function error404($page)
  {
    $envelope = getApi()->invoke("/{$page}.json");
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function getStarted()
  {
    $envelope = getApi()->invoke('/get-started.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function home()
  {
    $envelope = getApi()->invoke('/.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function screenshots()
  {
    $envelope = getApi()->invoke('/screenshots.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function overview()
  {
    $envelope = getApi()->invoke('/overview.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function supporters()
  {
    getRoute()->redirect('/team');
  }

  public function team()
  {
    $envelope = getApi()->invoke('/team.json');
    getTemplate()->display('template.php', $envelope['result']);
  }
}
