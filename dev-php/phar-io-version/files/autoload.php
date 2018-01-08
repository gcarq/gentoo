<?php
/* Autoloader for dev-php/phar-io-version */

if (!class_exists('Fedora\\Autoloader\\Autoload', false)) {
	require_once '/usr/share/php/Fedora/Autoloader/autoload.php';
}

\Fedora\Autoloader\Autoload::addPsr4('PharIo\\Version\\', __DIR__);
