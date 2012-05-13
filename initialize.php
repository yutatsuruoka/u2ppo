<?php

define ('APP_ROOT', __DIR__);
define ('PEAR_DIR', APP_ROOT . "/lib/pear");
set_include_path (get_include_path() . PATH_SEPARATOR . PEAR_DIR);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
