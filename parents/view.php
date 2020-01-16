<?php
	/**
	 * Класс родитель для видов
	 */
	
	class view
	{
		public function Generate($content_view, $template_view, $data = null)
		{
			include 'classes/views/'.$template_view;
		}
	}
?>