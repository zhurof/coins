<? $remove_menu = true; ?>
<? include "header.php";?>
	<main class="account">
		<? include "sidebar.php";?>
		<div class="account__main">
			<div class="account__nav">
				<div class="account__container">
					<ul class="account__progress">
						<li class="complete"><a href="#">Общая информация</a></li>
						<li><a href="#legal-data">Юридические данные</a></li>
						<li><a href="price-list.php">Прайс-листы</a></li>
						<li><a href="#employee-data">Данные сотрудника</a></li>
						<li><a href="#">Все готово к модерации</a></li>
					</ul>
				</div>
			</div>
			<div class="account__body">
				<div class="account__container">
					<div class="account__head">
						<h1 class="account__page-title">Общая информация</h1>
						<div class="account__links"><a href="#">Помощь</a></div>
					</div>
					<form action="" class="account__section" id="company-info">
						<h2 class="account__section-title">Информация о компании</h2>
						<label class="account__field">
							<span class="account__key">Название магазина для покупателей <span class="help" data-message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, odio."></span></span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Почта Банк">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Сайт <span class="help" data-message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, odio."></span></span>
							<span class="account__value">
								<input type="url" class="account__text-input" placeholder="www.pochtabank.ru">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Внутреннее название магазина <span class="help" data-message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, odio."></span></span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="ПочтаБанк">
							</span>
						</label>
						<div class="account__field">
							<div class="account__key">Логотип <span class="help" data-message="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, odio."></span></div>
							<div class="account__value">
								<span class="file-field">	
									<label class="btn btn--gray file-field__btn" tabindex="0"><input type="file" accept="image/*"/></label>
									<span class="file-field__content"></span>
								</span>
							</div>
						</div>
						<button class="btn account__section-btn">Сохранить</button>
					</form>
					<form action="" class="account__section" id="legal-data">
						<h2 class="account__section-title">Юридические данные</h2>
						<label class="account__field">
							<span class="account__key">Тип организации</span>
							<span class="account__value">
								<select>
									<option>ООО</option>
									<option>ОАО</option>
									<option>ЗАО</option>
								</select>
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">ОГРН</span>
							<span class="account__value">
								<input type="number" class="account__text-input" placeholder="1234567890123">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Название организации так же, как в учредительных документах</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="“Почта Банк”">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Юридический адрес</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Москва, ул Льва Толстого, 16">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Фактический адрес</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Москва, ул Льва Толстого, 16">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">ИНН</span>
							<span class="account__value">
								<input type="number" class="account__text-input" placeholder="123456789123">
							</span>
						</label>
						<button class="btn account__section-btn">Сохранить</button>
					</form>
					<form action="" class="account__section" id="employee-data">
						<h2 class="account__section-title">Данные сотрудника который будет работать с coin traders</h2>
						<label class="account__field">
							<span class="account__key">Имя</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Сергей">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Фамилия</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Абрамов">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">E-mail адрес</span>
							<span class="account__value">
								<input type="email" class="account__text-input" placeholder="sergey@yandex.ru">
							</span>
						</label>
						<div class="account__field">
							<div class="account__key">Телефон</div>
							<div class="account__value">
								<span class="phone-field">
									<input type="text" class="phone-field__prefix" readonly value="+7">
									<input type="text" class="phone-field__main" placeholder="900 00 000 00">
									<input type="text" class="phone-field__additional" placeholder="Доб.">									
								</span>
							</div>
						</div>
						<button class="btn account__section-btn">Сохранить</button>
					</form>
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	