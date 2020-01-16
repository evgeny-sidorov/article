		<div class="content">
			<h1 class="main__heading">Добро пожаловать</h1>
			<hr class="main__line">
			<div class="main__block-cart">
				<?php
						foreach($data as $row)
						{
							echo '	<div class="main__cart">
										<a href="/article/'.$row['id'].'" class="main__cart-link">
											<div class="main__cart-icon" style="background-image: url(\''.$row['preview'].'\');"></div>
											<h2 class="main__cart-heading">'.$row['name'].'</h2>
											<p class="main__cart-content">'.$row['heading'].'</p>
											<h5 class="main__cart-date">'.$row['date'].'</h5>
										</a>
									</div>';
						}
									
				?>
			</div>
		</div>