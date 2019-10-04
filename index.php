<?php	include "header.php";?>		
	<main>
		<div class="slider">
			<div class="slider__item" style="background-image:url(img/top.jpg)">
				<div class="container">
					<div class="slider__caption">Инвестируй в монеты и не плати налог на прибыль</div>
				</div>
			</div>
			<div class="slider__item" style="background-image:url(img/top.jpg)">
				<div class="container">
					<div class="slider__caption">Инвестируй в монеты и не плати налог на прибыль</div>
				</div>
			</div>
		</div>
		<?
			$cats = ['Популярные инвестиционные монеты','Популярные инвестиционные монеты','Монеты сбербанка','Новинки'];
			foreach($cats as $cat):
		?>
		<div class="category-block">
			<div class="container">
				<h2 class="category-block__title"><?=$cat;?></h2>
				<div class="category-block__slider">
					<div class="card category-block__item">
						<img src="img/catalog/0.png" alt="" class="card__img">
						<h3 class="card__title">Золотая инвестиционная монета Австрии Венский Филармоникер, 31,1 гр. чистого золота (проба 0,9999)</h3>
						<div class="card__price">93 180 руб.</div>
						<a href="good.php" class="card__link"></a>
					</div>
					<div class="card category-block__item">
						<img src="img/catalog/1.png" alt="" class="card__img">
						<h3 class="card__title">Золотая инвестиционная монета Австрии “Кенгуру” 2019 г.в., 31,1 гр. чистого золота (проба 0,9999)</h3>
						<div class="card__price">93 180 руб.</div>
						<a href="good.php" class="card__link"></a>
					</div>
					<div class="card category-block__item">
						<img src="img/catalog/2.png" alt="" class="card__img">
						<h3 class="card__title">Золотая инвестиционная монета Георгий Победоносец 2018 г.в., (СПМД), 7,78 гр. чистого золота (проба 0,9999)</h3>
						<div class="card__price">93 180 руб.</div>
						<a href="good.php" class="card__link"></a>
					</div>
					<div class="card category-block__item">
						<img src="img/catalog/2.png" alt="" class="card__img">
						<h3 class="card__title">Золотая инвестиционная монета Георгий Победоносец 2018 г.в., (СПМД), 7,78 гр. чистого золота (проба 0,9999)</h3>
						<div class="card__price">93 180 руб.</div>
						<a href="good.php" class="card__link"></a>
					</div>
					<div class="card category-block__item">
						<img src="img/catalog/1.png" alt="" class="card__img">
						<h3 class="card__title">Золотая инвестиционная монета Австрии “Кенгуру” 2019 г.в., 31,1 гр. чистого золота (проба 0,9999)</h3>
						<div class="card__price">93 180 руб.</div>
						<a href="good.php" class="card__link"></a>
					</div>
				</div>
			</div>
		</div>
		<?endforeach;?>
	</main>
<?php	include "footer.php";?>	