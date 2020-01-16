<?php
	/**
	 *   Класс роутинга, отвечает за перенаправление страниц
	 */
	class Route
	{
		
		public static function start()
		{
			$controller = 'main';
			$action = 1;
			$routes = explode('/', $_SERVER['REQUEST_URI']);
			$routes[1] = strtolower($routes[1]);
			$get = explode('?', $routes[1]);
			$routes[1] = $get[0];

			if (!empty($routes[1])) {
				if (preg_match("#^[aA-zZ0-9\-_]+$#", $routes[1])) $controller = $routes[1];
				else $controller = $controller;
			}

			if (!empty($routes[2])) {
				$action = intval($routes[2]);
				if ($action == 0) $action = 1;;
			}

			$model_name = 'model_'.$controller;
			$controller_name = 'controller_'.$controller;

			$model = 'classes/model/model_'.$controller.'.php';
			$controller = 'classes/controller/controller_'.$controller.'.php';

			if (file_exists($controller) && file_exists($model)) {
				include $controller;
				include $model;
				$controller = new $controller_name;

				$controller->DataLoading($action);

			} else {
				Route::ErrorPage404();
			}

		}



		public static function ErrorPage404()
		{
	        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			header('Location:'.$host);
	    }

	}
?>