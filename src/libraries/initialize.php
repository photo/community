<?php
require sprintf('%s/controllers/BaseController.php', $libraryPath);
require sprintf('%s/controllers/ApiController.php', $libraryPath);
require sprintf('%s/controllers/GeneralController.php', $libraryPath);
require sprintf('%s/external/Markdown/markdown.php', $libraryPath);
require sprintf('%s/external/CssMin/CssMin.php', $libraryPath);
require sprintf('%s/external/JSMin/JSMin.php', $libraryPath);

$route = getRoute();
$api = getApi();
$route->get('/', array('GeneralController', 'home'));
$route->get('/community', array('GeneralController', 'community'));
$route->get('/contribute/?([a-zA-Z0-9-]+)?', array('GeneralController', 'contribute'));
$route->get('/documentation', array('GeneralController', 'documentation'));
$route->get('/documentation/api/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationApi'));
$route->get('/documentation/faq/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationFaq'));
$route->get('/documentation/guide/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationGuide'));
$route->get('/documentation/schemas/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationSchemas'));
$route->get('/get-started', array('GeneralController', 'getStarted'));
$route->get('/overview', array('GeneralController', 'overview'));
$route->get('/screenshots', array('GeneralController', 'screenshots'));
$route->get('/supporters', array('GeneralController', 'supporters'));
$route->get('/team', array('GeneralController', 'team'));

$api->get('/\.json', array('ApiController', 'home'), EpiApi::external);
$api->get('/community\.json', array('ApiController', 'community'), EpiApi::external);
$api->get('/contribute/?([a-zA-Z0-9-]+)?\.json', array('ApiController', 'contribute'), EpiApi::external);
$api->get('/documentation\.json', array('ApiController', 'documentation'), EpiApi::external);
$api->get('/documentation/api/([a-zA-Z0-9-]+)\.json', array('ApiController', 'documentationApi'), EpiApi::external);
$api->get('/documentation/faq/([a-zA-Z0-9-]+)\.json', array('ApiController', 'documentationFaq'), EpiApi::external);
$api->get('/documentation/guide/([a-zA-Z0-9-]+)\.json', array('ApiController', 'documentationGuide'), EpiApi::external);
$api->get('/documentation/schemas/([a-zA-Z0-9-]+)\.json', array('ApiController', 'documentationSchemas'), EpiApi::external);
$api->get('/get-started\.json', array('ApiController', 'getStarted'), EpiApi::external);
$api->get('/overview\.json', array('ApiController', 'overview'), EpiApi::external);
$api->get('/screenshots\.json', array('ApiController', 'screenshots'), EpiApi::external);
$api->get('/team\.json', array('ApiController', 'team'), EpiApi::external);

$api->get('/(.*).json', array('ApiController', 'error404'), EpiApi::external);
$route->get('/(.*)', array('GeneralController', 'error404'));
