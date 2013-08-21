<?php		
	include_once 'lib.php';	
	$engine = new JYMEngine();
	$engine->debug = false;

	if ($engine->debug) echo '> Fetching request token'. PHP_EOL;
	if (!$engine->fetch_request_token()) die('Fetching request token failed');

	if ($engine->debug) echo '> Fetching access token'. PHP_EOL;
	if (!$engine->fetch_access_token()) die('Fetching access token failed');

	if ($engine->debug) echo '> Signon as: '. USERNAME. PHP_EOL;

	if (!$engine->signon('cui bap')) die('Signon failed');
	
	if (!$engine->send_message('baotrucbennhau@yahoo.com', 'asdfas sdhflsdaflasdf')) die('Gui IM failed');
	
	echo "xong rui ne may";
?>