<?php

/**
 *-----------------------------------------------------------------------------------------------
 * header response
 * @return header
 *-----------------------------------------------------------------------------------------------

 * Melakuka Required file bootstrap
 *
 */
ob_clean();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-Webkit-CSP: Deprecated");
header("X-Content-Security-Policy: Deprecated");
header("X-Permitted-Cross-Domain-Policies: none");
header("Keep-Alive: timeout=5, max=100");
header("Referrer-Policy: same-origin");
header("X-Powered-By: lua");
