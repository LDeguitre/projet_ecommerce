<?php

// Set la session à 1h
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);

// Lancement de la session
session_start();


// Charge les classes
require_once('libraries/autoload.php');

Application::process();
