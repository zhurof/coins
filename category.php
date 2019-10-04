<?php	include "header.php";?>		
	<main>
		<div class="breadcrumbs">
			<div class="container">
				<ul class="breadcrumbs__list">
					<li><a href="/">Главная</a></li>
					<li>Инвестиционные</li>
				</ul>
			</div>
		</div>
		<div class="catalog">
			<div class="container">
				<div class="catalog__head">
					<h1 class="catalog__title">Инвестиционные монеты</h1>
					<div class="sort catalog__sort">
						<span class="sort__title">Сортировать:</span>
						<a href="?sort_by=views" class="sort__item">по популярности</a>
						<a href="?sort_by=price" class="sort__item">по цене</a>
						<a href="?sort_by=rating" class="sort__item">по рейтингу</a>
						<a href="?sort_by=date" class="sort__item">по новизне</a>
						<label class="sort__option">
							<input type="checkbox">
							<span>Сначала предложения в моём регионе</span>
						</label>
					</div>
				</div>
				<div class="catalog__body">
					<div class="row">
						<div class="col-md-9 catalog__main">
							<div class="row">
								<?for ($i = 0; $i<3;$i++):?>
								<div class="col-sm-4 col-xs-6">
									<div class="card">
										<img src="img/catalog/0.png" alt="" class="card__img">
										<h3 class="card__title">Золотая инвестиционная монета Австрии Венский Филармоникер, 31,1 гр. чистого золота (проба 0,9999)</h3>
										<div class="card__price">93 180 руб.</div>
										<a href="good.php" class="card__link"></a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6">
									<div class="card">
										<img src="img/catalog/1.png" alt="" class="card__img">
										<h3 class="card__title">Золотая инвестиционная монета Австрии “Кенгуру” 2019 г.в., 31,1 гр. чистого золота (проба 0,9999)</h3>
										<div class="card__price">93 180 руб.</div>
										<a href="good.php" class="card__link"></a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6">
									<div class="card">
										<img src="img/catalog/2.png" alt="" class="card__img">
										<h3 class="card__title">Золотая инвестиционная монета Георгий Победоносец 2018 г.в., (СПМД), 7,78 гр. чистого золота (проба 0,9999)</h3>
										<div class="card__price">93 180 руб.</div>
										<a href="good.php" class="card__link"></a>
									</div>
								</div>
								<?endfor;?>
							</div>
							<ul class="pagination">
								<li><a href="#" class="icon-arrow-left" aria-label="Previous"></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#">7</a></li>
								<li><a href="#">8</a></li>
								<li><a href="#">9</a></li>
								<li><a href="#">10</a></li>
								<li><a href="#" class="icon-arrow-right" aria-label="Next"></a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<form action="" class="filter">
								<div class="filter__mobile-toggler"><span>Фильтры</span></div>
								<div class="filter__body">
									<div class="filter__item">
										<input type="text" placeholder="Название монеты" />
									</div>
									<div class="filter__item">
										<h3 class="filter__subtitle">Год</h3>
										<div class="double-field">
											<input type="number" min="1657" max="2018" placeholder="от 1657">
											<input type="number" min="1658" max="2019" placeholder="до 2019">
										</div>
									</div>
									<div class="filter__item">
										<h3 class="filter__subtitle">Цена</h3>
										<div class="double-field">
											<input type="number" min="389" max="128062" placeholder="от 389">
											<input type="number" min="390" max="128063" placeholder="до 128 063">
										</div>
									</div>
									<div class="filter__item">
										<h3 class="filter__subtitle">Вес чистого металла</h3>
										<label class="label filter__field">
											<input type="checkbox">
											<span>1</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>1,56</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>3</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>6,22</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>7,32</span>
										</label>
										<div class="collapse">
											<label class="label filter__field">
												<input type="checkbox">
												<span>8.23</span>
											</label>
										</div>
										<span class="toggle-link filter__toggler"></span>
									</div>
									<div class="filter__item">
										<h3 class="filter__subtitle">Проба</h3>
										<label class="label filter__field">
											<input type="checkbox">
											<span>900</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>917</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>925</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>999</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>9995</span>
										</label>
										<div class="collapse">
											<label class="label filter__field">
												<input type="checkbox">
												<span>9999</span>
											</label>
										</div>
										<span class="toggle-link filter__toggler"></span>
									</div>
									<div class="filter__item">
										<h3 class="filter__subtitle">Металл</h3>
										<label class="label filter__field">
											<input type="checkbox">
											<span>Золото</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>Серебро</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>Платина</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>Медь</span>
										</label>
										<label class="label filter__field">
											<input type="checkbox">
											<span>Биметалл</span>
										</label>
										<div class="collapse">
											<label class="label filter__field">
												<input type="checkbox">
												<span>Золото</span>
											</label>
											<label class="label filter__field">
												<input type="checkbox">
												<span>Серебро</span>
											</label>
											<label class="label filter__field">
												<input type="checkbox">
												<span>Платина</span>
											</label>
											<label class="label filter__field">
												<input type="checkbox">
												<span>Медь</span>
											</label>
											<label class="label filter__field">
												<input type="checkbox">
												<span>Биметалл</span>
											</label>
										</div>
										<span class="toggle-link filter__toggler"></span>
									</div>
									<span class="filter__hide-btn icon-chevron-up"></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	