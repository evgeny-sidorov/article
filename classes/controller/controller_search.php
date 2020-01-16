<?php 
	/**
	 * 			Класс контройлера главной страницы,  будет выводить приветствие и первые 5 статей
	 */
	class controller_search
	{
		
		function __construct()
		{
			$this->model = new model_search();
			$this->view = new view();
		}

		public function DataLoading($id)
		{
			$data = $this->model->Search($_GET['search']);
			$this->view->Generate('view_search.php', 'view_template.php', $data);
		}
	}
?>