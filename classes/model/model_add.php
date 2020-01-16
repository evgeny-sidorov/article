<?php 
	/**
	 * 			Модель добавления статьи
	 */
	class model_add
	{
		public function AddArticle($content, $name_author, $name, $text, $file)
		{
				if (empty($content) || empty($name_author) || empty($name) || empty($text) ){
					return array (
							array(
							'status' => 'error',
							'text'   => 'Не введены нужные поля'
	 					)
					);	
				} else {

					if ($file['size'] < 186525e+11) {

						$connection = new PDO('mysql:host=localhost;dbname=article;charset=utf8', 'root', '');
						$content = htmlspecialchars($content);
						$query = $connection->prepare('INSERT INTO `article` (`name`, `name_author`, `content`, `preview`, `heading`, `date`) VALUES (?, ?, ?, ?, ?, NOW())');
						if (empty($file)) {
							$icon = '/image/icon.png';
						} else {
							
							if ($file['type'] == 'image/png') $type = '.png';
							else $type = '.jpg';

							$uploaddir = '/image/';
							$upload_db = $uploaddir . basename(uniqid()) . $type;
							$uploadfile = $_SERVER['DOCUMENT_ROOT'].$upload_db;

							move_uploaded_file($file['tmp_name'], $uploadfile);
							$icon = $upload_db;
						}

						$query->execute(array($name, $name_author, $content, $icon, $text));
						$link = $connection->lastInsertId();
						$query = null;

						header('Location: /article/'. $link);

					} else {

						return array (
								array(
								'status' => 'error',
								'text'   => 'Ошибка, размер изображения не должен привышать 1МБ'
		 					)
						);	
					}
				}
		}
	}
?>