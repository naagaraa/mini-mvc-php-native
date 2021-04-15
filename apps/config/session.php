<?php
use Mpdf\Tag\Time;
 /** 
 *------------------------------------------------------------------------------------------------------
 * SESSION
 * @author nagara 
 *------------------------------------------------------------------------------------------------------
 *
 */


 /** 
 *------------------------------------------------------------------------------------------------------
 * SESSION START
 * @return session random untuk _toke dan minimvc_session
 *------------------------------------------------------------------------------------------------------
 *
 */

 
function start_session() {
    session_start();
    $_SESSION['_minimvc_session'] = sha1(uniqid());
    $_SESSION['_token'] = sha1(Time());
}

start_session();


 /**
 *------------------------------------------------------------------------------------------------------
 * SESSION DESTROY
 * @return empty session
 *------------------------------------------------------------------------------------------------------
 *
 * call destroy_session di controller, saat ingin mendelete session
 */
function destroy_session(){
    session_abort();
    $_SESSION = [];
    $_COOKIE = [];
}

