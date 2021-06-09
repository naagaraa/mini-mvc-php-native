<?php
#set php.ini hardcode untuk hidden technology by php ini
ini_set('poweredByHeader', false);
ini_set('expose_php', 'off');
ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('ServerSignature Off', false);

// session dan cookie time expired
ini_set('session.gc_maxlifetime', 30*60); // expires in 30 minutes
ini_set('session.cookie_lifetime', 30*60); // 30 minutes
// ini_set('allow_url_fopen', true);
// ini_set('allow_url_include', 'on');

?>