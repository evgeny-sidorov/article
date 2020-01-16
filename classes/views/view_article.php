		<?php
			foreach($data as $row)
			{
				$content = htmlspecialchars_decode($row['content']);
				echo '<div class="content content_box content_padding">
						<h1 class="article__head">'.$row['name'].'</h1>
						<hr class="article__line">
						'.$content.'
						<hr class="article__line">
						<div class="article__page">
							<h3 class="article__author">'.$row['name_author'].'</h3>
							<h5 class="article__date">'.$row['date'].'</h5>
						</div>
					</div>';
			}
									
		?>