			<!-- 	Script	 -->
		<script src="lib/jquery/jquery.js"></script>
		<script type="text/javascript" src="lib/ckeditor.js"></script>  
		<div class="content content_box content_padding">
			<h1 class="article__head">Добавить статью</h1>
			<hr class="article__line">
			<h3>
				<?php
				if ($data) {
					foreach($data as $row)
						{
							echo '<h3 class="article__debug '. $row['status'] .'">'. $row['text'] .'</h3>';
						}		
				}
										
				?>
			</h3>
			<form method="post" action="/add" enctype="multipart/form-data">
			  <textarea name="content" id="editor" cols="45" rows="5"></textarea>
			    <script type="text/javascript">
			     CKEDITOR.replace( 'editor');
			    </script>
			    <input type="text" name="name_author" class="article__input" placeholder="Ваше имя">
			    <input type="text" name="name" class="article__input" placeholder="Название статьи">
			    <input type="text" name="textprew" class="article__input" placeholder="Превью статьи">
			    <input type="file" name="image" accept="image/jpeg,image/png" class="article__file">
			    <button type="submit" name="enter" class="article__button">Добавить</button> 
			</form>
		</div>	