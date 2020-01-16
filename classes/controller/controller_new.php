<?php 
	/**
	 * 			Класс контройлера главной страницы,  будет выводить приветствие и первые 5 статей
	 */
	class controller_new
	{
		
		function __construct()
		{
			$this->model = new model_new();
			$this->view = new view();
		}

		public function DataLoading($id)
		{
			$data = $this->model->GetData($id);
			$this->view->Generate('view_new.php', 'view_template.php', $data);
		}
	}
?>