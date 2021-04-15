<?php

session_start();
$_SESSION['minimvc_session'] = sha1(uniqid());
