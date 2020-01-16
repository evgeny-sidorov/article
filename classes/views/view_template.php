<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная страница</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="menu">
			<ul class="menu__list">
				<li class="menu__item"><a href="/">Главная</a></li>
				<li class="menu__item"><a href="/new">Статьи</a></li>
				<li class="menu__item"><a href="/add">Написать</a></li>
			</ul>
			<form method="GET" action="/search" class="form-search">
				<input class="menu__search" type="text" name="search" placeholder="Поиск">
			</form>
		</div>
		<!-- Content -->
		<?php include 'classes/views/'.$content_view; ?>	
	</div>
</body>
</html>