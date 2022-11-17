<?php

use DebugBar\StandardDebugBar;

global $system;

/**
 * get system variabel
 */
if (empty($system)) {
   require dirname(__DIR__, 2) . "/system/error/_500_error.html";
   exit;
}

/**
 * check if debug is true
 */
if ($system["APP_DEBUG"] === "true") {
   render_debug();
} else {
   return true;
};

/**
 * Render Debug Bar
 *
 * @return void
 */
function render_debug()
{
   $debugbar = new StandardDebugBar();
   $debugbarRenderer = $debugbar->getJavascriptRenderer();
   $debugbar["messages"]->addMessage("welcome to the mini mvc php native, build from love and hobbie");
   echo "<html>
    <head>
        {$debugbarRenderer->renderHead()}
    </head>
    <body>
        {$debugbarRenderer->render()}
    </body>
   </html>";
}
