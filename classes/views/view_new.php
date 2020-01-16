		<div class="content content_box">
				<?php
						foreach($data as $row)
						{
							echo '<div class="article__box">
									<a href="/article/'.$row['id'].'" class="article__link">
										<div class="article__icon" style="background-image: url(\''.$row['preview'].'\');"></div>
										<h2 class="article__heading">'.$row['name'].'</h2>
										<p class="article__content">'.$row['heading'].'<br><br>'.$row['date'].'</p>
									</a>
								</div>';
							$page++;	
						}
									
				?>

			<hr class="article__line">
			<div class="article__page">
				<?php 
					for ($i = 15; $page >= $i; ++$i) {
						echo '<a href="/new/'.$i.'" class="article__page-number">'.$i.'</a>';
					}
				?>
			</div>
		</div>	