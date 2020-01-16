<?php
		/**
	 * 			Класс контройлера главной страницы,  будет выводить приветствие и первые 3 статей
	 */
	class controller_add
	{
		
		function __construct()
		{
			$this->model = new model_add();
			$this->view = new view();
		}

		public function DataLoading($id)
		{
			if ($_POST['content']) {
				$data = $this->model->AddArticle($_POST['content'], $_POST['name_author'], $_POST['name'], $_POST['textprew'], $_FILES['image']);
			}

			$this->view->Generate('view_add.php', 'view_template.php', $data);
		}
	}
?>