<?php 
	/**
	 * 			Класс контройлера главной страницы,  будет выводить приветствие и первые 5 статей
	 */
	class controller_main
	{
		
		function __construct()
		{
			$this->model = new model_main();
			$this->view = new view();
		}

		public function DataLoading()
		{
			$data = $this->model->GetData();
			$this->view->Generate('view_main.php', 'view_template.php', $data);
		}
	}
?>