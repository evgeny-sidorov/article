<?php 
	/**
	 * 			Модель главной страницы
	 */
	class model_main
	{
		public function GetData()
		{
			$connection = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
			$query = $connection->query('SELECT `id`, `name`, `preview`, `heading`, `date` FROM article LIMIT 3');
			return $query;
		}
	}
?>