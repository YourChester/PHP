<?php 

class Route {

	private $routes;

	public function __construct() {
		$routerPath = ROOT.'/config/conf_router.php';
		$this->routes = include($routerPath);
	}
	/*
	Получаем URI
	*/
	private function getURI() {
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run() {
		
		//Запоминаем URI
		$uri = $this->getURI();
		
		//Вытаскиваем роуты
		foreach ($this->routes as $uriPattern => $path) {
			//Проверяем на наличие роута
			if (preg_match("~$uriPattern~", $uri)) {

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				
				//Получаем имя контролера 
				$segments = explode('/', $internalRoute);
				$controlerName = array_shift($segments).'Controler';
				$actionName = 'action'.array_shift($segments);
				$parameters = $segments;
				
				//Подключаем контролер
				$controlerFile = ROOT.'/controlers/'.$controlerName.'.php';
				
				if (file_exists($controlerFile)) {
					include_once($controlerFile);
				}

				//Создаем объект
				$controlerObject = new $controlerName;
				$result = call_user_func_array(array($controlerObject,$actionName), $parameters);
				if ($result != null) {
					break;
				}
			}
		}
	}
}
?>