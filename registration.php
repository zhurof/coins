<? $remove_menu = true; ?>
<?
	//на этой странице нет ни бокового ни верхнего меню. Поэтому нужно убирать переключения мобильного меню
	$remove_menu_btn = true;
?>
<? include "header.php";?>
	
	<main class="account">
		<div class="account__main">
			<form action="" class="account__body">
				<div class="account__container">
					<div class="account__head">
						<h1 class="account__page-title">Регистрация</h1>
					</div>
					<div class="account__section">
						<h2 class="account__section-title">Общая информация</h2>
						<label class="account__field">
							<span class="account__key">Название компании для покупателей</span>
							<span class="account__value">
								<input type="text" class="account__text-input" placeholder="Почта Банк">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">Телефон для клиентов</span>
							<span class="account__value">
								<input type="tel" class="account__text-input" placeholder="+7 900 00 000 00">
							</span>
						</label>
						<label class="account__field">
							<span class="account__key">E-mail адрес для получения заявок</span>
							<span class="account__value">
								<input type="email" class="account__text-input" placeholder="E-mail">
							</span>
						</label>
						<div class="account__field">
							<div class="account__key">Логотип</div>
							<div class="account__value">
								<span class="file-field">									
									<span class="file-field__content"></span>
									<label class="btn file-field__btn" tabindex="0"><input type="file" class="text-only" accept="image/*"/></label>
								</span>
							</div>
						</div>
					</div>
					<div class="account__section">
						<h2 class="account__section-title">Контактные данные</h2>
						<p>Данные сотрудника который будет работать с coin traders</p>
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
						<div class="account__field">
							<div class="account__key"><img src="img/captcha.png" alt=""></div>
							<div class="account__value">
								<input type="text" class="account__text-input" placeholder="Введите символы с картинки">
							</div>
						</div>
					</div>
					<div class="account__footer">
						<button class="btn account__submit" disabled>Зарегистрироваться</button>
						<div class="account__notation">Для продолжения регистрации пройдите по ссылке в письме, которое выслано на е-mail адрес сотрудника.</div>
					</div>
				</div>
			</form>
		</div>
	</main>
<? include "footer.php";?>	