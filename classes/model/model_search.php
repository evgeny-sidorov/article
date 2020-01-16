<?php 
	/**
	 * 			Модель поиска
	 */
	class model_search
	{
		public function Search($get)
		{
			if (strlen($get) < 3) {
				echo "Слишком кроткий запрос";
			} else if (strlen($get) > 100) {
				echo "Слишком длинный запрос";
			} else {

				$connection = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
				$query = $connection->query("SELECT `id`, `name`, `preview`, `heading`, `date`
                  FROM `article` WHERE `name` LIKE '%$get%'
                  OR `heading` LIKE '%$get%'");

				if ($query->rowCount() > 0) {
					return $query;
				} else {
					return array(
						array(
							'message' => 'По вашему запросу нечего не найдено'
						)
					);
				}

			}

		}
	}
?>