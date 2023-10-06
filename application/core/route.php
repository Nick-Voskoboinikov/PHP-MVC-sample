<?php
class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
        $routes = ltrim($_SERVER['REQUEST_URI'], '/');
        $routes = explode('/', $routes);


		// получаем имя контроллера
		$controller_name = empty($routes[0]) ? 'main' : $routes[0];
		$action_name = empty($routes[1]) ? 'index' : $routes[1];

		// добавляем префиксы
		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_' . $controller_name;
		$action_name = 'action_'.$action_name;
		// подцепляем файл с классом модели (файла модели может и не быть)
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}
		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			
			Route::ErrorPage404();
		}
		// создаем контроллер
		$controller = new $controller_name;
		if(method_exists($controller, $action_name))
		{
			// вызываем действие контроллера
			$controller->$action_name();
		}
		else
		{
		    Route::ErrorPage404();
		}
	}
	static public function ErrorPage404()
	{
        
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'main/not_found/'. urlencode(ltrim(htmlspecialchars($_SERVER["REQUEST_URI"]), '/')) );
    }

}