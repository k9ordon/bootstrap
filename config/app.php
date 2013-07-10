<?

$config['base'] = 'http://'.$_SERVER['SERVER_NAME'] . '';
$config['contentBase'] = $config['base'];

$config['filesUrl'] = $config['base']  . '/files';

$config['availableLanguages'] = array('en', 'de');
$config['availableCountries'] = array(
	'all' => array('name' => 'World Wide', 'lang' => 'en'), 
	'at' => array('name' => 'Austria', 'lang' => 'de'), 
	'uk' => array('name' => 'United Kingdom', 'lang' => 'en')
);