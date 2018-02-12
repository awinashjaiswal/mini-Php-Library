<?php


//--- load classes that are needed only -----//
spl_autoload_register(function($class)
{
	require_once $_SERVER['DOCUMENT_ROOT'].'/admission/ClassLibrary/'.$class.'.class.php';
});



