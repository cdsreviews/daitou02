<?php
$GLOBALS['_ta_rp_key'] = 'ce9072444c6889f941892a6b899a2890';
$GLOBALS['_ta_reverse_proxy_id'] = '8bh15i';

require 'bootloader_1161a082657673e1303a3058c5b9fe5e.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>