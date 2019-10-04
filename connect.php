<? $remove_menu = true; ?>
<? include "header.php";?>
	<main class="account">
		<? include "sidebar.php";?>
		<div class="account__main">
			<div class="account__body">
				<div class="account__container">
					<div class="account__head">
						<h1 class="account__page-title">Подключение</h1>
					</div>
					<div class="account__section">
						<p>Выполните настройки на каждой странице из списка. После этого нужно пройти модерацию - служба качества Coin traders должна убедиться, что компания соответствует <a href="text-page.php">требованиям сервиса</a>. Модерация занимает до двух рабочих дней.</p>
						<div class="nav-table">
							<div class="nav-table__item">
								<h3 class="nav-table__item-title">Общая информация</h3>
								<div class="nav-table__tools"><a href="settings.php" class="nav-table__status nav-table__status--complete"></a></div>
							</div>
							<div class="nav-table__item">
								<h3 class="nav-table__item-title">Юридические данные</h3>
								<div class="nav-table__tools"><a href="settings.php#legal-data" class="btn btn--gray btn--block nav-table__btn">Указать</a></div>
							</div>
							<div class="nav-table__item">
								<h3 class="nav-table__item-title">Данные сотрудника</h3>
								<div class="nav-table__tools"><a href="settings.php#employee-data" class="btn btn--gray btn--block nav-table__btn">Указать</a></div>
							</div>
							<div class="nav-table__item">
								<h3 class="nav-table__item-title">Прайс-листы</h3>
								<div class="nav-table__tools"><a href="price-list.php" class="btn btn--gray btn--block nav-table__btn">Загрузить</a></div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</main>
<? include "footer.php";?>	