<?php

// Set flag that this is a parent file.
define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$path = "/home/www/megaserv/";  //caminho da instalação do Joomla
define('JPATH_BASE', $path);
require_once JPATH_BASE . DS . 'includes' . DS . 'defines.php';
require_once JPATH_BASE . DS . 'includes' . DS . 'framework.php';
$mainframe = & JFactory::getApplication('site');
$db = &JFactory::getDBO();
$mainframe->initialise();
$user = & JFactory::getUser();

echo $user->id;  //imprime id do usuário 
echo $user->name; //imprime nome do usuário
?>