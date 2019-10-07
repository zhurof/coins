<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/bootstrap3/bootstrap.min.css" />
	<link rel="stylesheet" href="libs/daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="header__topline">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="/" class="logo header__logo"><img src="img/logo.png" alt=""></a>
					</div>
					<div class="col-md-6">
						<form action="" class="search-form header__search">
							<input type="text" class="search-form__input">
							<button class="btn btn--gray search-form__btn">Найти</button>
						</form>
					</div>
					<div class="col-md-3">
						<div class="header__tools">
							<? if(!$remove_menu_btn):?>
							<span class="menu-btn"></span>
							<? endif;?>
							<span class="search-btn"></span>
							<a href="#" class="header__location-link" data-modal="location">Екатеринбург</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?if(!$remove_menu):?> <!--Убираем обычное меню на страницах типа "Личный кабинет"-->
		<div class="header__bottomline">
			<div class="container">
				<ul class="header__menu">
					<li><a href="category.php">Весь каталог</a></li>
					<li><a href="category.php?1">Инвестиционные</a></li>
					<li><a href="category.php?2">Старинные</a></li>
					<li><a href="category.php?3">Коллекционые</a></li>
					<li><a href="quotes.php">Котировки</a></li>
				</ul>
			</div>
		</div>
		<script>
			//Подсветка активного пункта меню. Для демонстрации! 
			//GET-параметр для демонстративного ра
			var links = document.querySelectorAll('.header__menu a');
			for(var i=0;i<links.length;i++){
				if(links[i].href == location.href){
					links[i].parentElement.classList.add('active');
					break;
				}
			}
		</script>
		<?endif;?>
	</header>