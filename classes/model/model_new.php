<?php 
	/**
	 * 			Модель страницы выдачи статей
	 */
	class model_new
	{
		public function GetData($id)
		{
			$connection = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
			$quantity = 15;
			$last = ($id * $quantity) - $quantity;
			$query = $connection->query('SELECT `id`, `name`, `preview`, `heading`, `date` FROM article LIMIT '.$last.', '.$quantity.'');
			return $query;
		}
	}
?>