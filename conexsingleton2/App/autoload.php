<?php  

namespace App;

define('__root__', dirname(dirname(__FILE__))."/");

spl_autoload_register(function($class){
	$class = str_replace('\\', '/', $class . ".php");
	$fullclass = __root__ . $class;

	if(file_exists($fullclass)){
		require_once($fullclass);
	}
})

?>