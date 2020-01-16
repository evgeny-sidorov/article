<?php
		/**
	 * 			Класс контройлера главной страницы,  будет выводить приветствие и первые 3 статей
	 */
	class controller_article
	{
		
		function __construct()
		{
			$this->model = new model_article();
			$this->view = new view();
		}

		public function DataLoading($id)
		{
			$data = $this->model->GetData($id);
			$this->view->Generate('view_article.php', 'view_template.php', $data);
		}
	}
?>