<?php
class GeneralController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
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

  public function overview()
  {
    $envelope = getApi()->invoke('/overview.json');
    getTemplate()->display('template.php', $envelope['result']);
  }

  public function supporters()
  {
    $envelope = getApi()->invoke('/supporters.json');
    getTemplate()->display('template.php', $envelope['result']);
  }
}
