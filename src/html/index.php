<?php
date_default_timezone_set('America/Los_Angeles');
$basePath = dirname(dirname(__FILE__));
$libraryPath = sprintf('%s/libraries', $basePath);
$epiPath = sprintf('%s/epi', $libraryPath);
require sprintf('%s/Epi.php', $epiPath);

Epi::setPath('base', $epiPath);
Epi::setPath('view', sprintf('%s/templates', $basePath));
Epi::setSetting('exceptions', true);
Epi::init('api','cache','config','logger','route','session','template','database');
EpiSession::employ(EpiSession::PHP);

require sprintf('%s/initialize.php', $libraryPath);
getRoute()->run(); 
