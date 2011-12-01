<?php
require sprintf('%s/controllers/BaseController.php', $libraryPath);
require sprintf('%s/controllers/ApiController.php', $libraryPath);
require sprintf('%s/controllers/GeneralController.php', $libraryPath);
require sprintf('%s/external/Markdown/markdown.php', $libraryPath);

getRoute()->get('/', array('GeneralController', 'home'));
getRoute()->get('/documentation', array('GeneralController', 'documentation'));
getRoute()->get('/documentation/api/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationApi'));
getRoute()->get('/documentation/guide/([a-zA-Z0-9-]+)', array('GeneralController', 'documentationGuide'));
getRoute()->get('/get-started', array('GeneralController', 'getStarted'));
getRoute()->get('/overview', array('GeneralController', 'overview'));
getRoute()->get('/supporters', array('GeneralController', 'supporters'));

getApi()->get('/\.json', array('ApiController', 'home'), EpiApi::external);
getApi()->get('/documentation.json', array('ApiController', 'documentation'), EpiApi::external);
getApi()->get('/documentation/api/([a-zA-Z0-9-]+).json', array('ApiController', 'documentationApi'), EpiApi::external);
getApi()->get('/documentation/guide/([a-zA-Z0-9-]+).json', array('ApiController', 'documentationGuide'), EpiApi::external);
getApi()->get('/get-started\.json', array('ApiController', 'getStarted'), EpiApi::external);
getApi()->get('/overview\.json', array('ApiController', 'overview'), EpiApi::external);
getApi()->get('/supporters\.json', array('ApiController', 'supporters'), EpiApi::external);
