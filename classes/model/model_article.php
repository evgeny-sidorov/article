<?php 
	/**
	 * 			Модель страницы статьи
	 */
	class model_article
	{
		public function GetData($id)
		{
			$connection = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
			$query = $connection->prepare('SELECT `name`, `content`, `name_author`, `date` FROM article WHERE id = ?');
			$query->execute(array($id));

			if ($query->rowCount() == 0) Route::ErrorPage404();
			else return $query;
		}
	}
?>