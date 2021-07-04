<?php
use Mpdf\Tag\Time;

  /** 
 *------------------------------------------------------------------------------------------------------
 * SESSION START
 * @return session random untuk _toke dan minimvc_session
 * @author nagara
 *------------------------------------------------------------------------------------------------------
 *
 */
 
function start_session() {
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        $_SESSION['_minimvc_session'] = sha1(uniqid());
    } 
}



 /**
 *------------------------------------------------------------------------------------------------------
 * SESSION DESTROY
 * @return empty session
 * @author nagara
 *------------------------------------------------------------------------------------------------------
 *
 * call destroy_session di controller, saat ingin mendelete session
 */
function destroy_session(){
    if(isset($_SESSION)) 
    {
        session_destroy();
        $_SESSION = [];
        $_COOKIE = [];
    }
}

/**
 *------------------------------------------------------------------------------------------------------
 * make session
 * @return array session
 * @author nagara
 * @param array
 *------------------------------------------------------------------------------------------------------
 *
 * call make_session di controller, saat ingin membuat session data dalam bentuk session
 */

function make_session($session = [])
{
    return $_SESSION = $session;
}


/**
 *------------------------------------------------------------------------------------------------------
 * this session
 * @return array session
 * @author nagara
 *------------------------------------------------------------------------------------------------------
 *
 * call this_session di controller, saat ingin membuat mendebug isi session
 */

function this_session()
{
    return dump($_SESSION);
}
