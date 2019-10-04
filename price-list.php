<? $remove_menu = true; ?>
<? include "header.php";?>
	<main class="account">
		<? include "sidebar.php";?>
		<div class="account__main">
			<div class="account__nav">
				<div class="account__container">
					<ul class="account__progress">
						<li class="complete"><a href="#">Общая информация</a></li>
						<li><a href="settings.php#legal-data">Юридические данные</a></li>
						<li><a href="javascript:void(0)">Прайс-листы</a></li>
						<li><a href="settings.php#employee-data">Данные сотрудника</a></li>
						<li><a href="#">Все готово к модерации</a></li>
					</ul>
				</div>
			</div>
			<div class="account__body">
				<div class="account__container">
					<div class="account__head">
						<h1 class="account__page-title">Прайс-листы</h1>
						<div class="account__links"><a href="#">Скачать пример файла</a> <a href="#">Помощь</a></div>
					</div>
					<form action="" class="account__section">
						<span class="file-field file-field--stack">									
							<span class="file-field__content"></span>
							<label class="btn btn--block file-field__btn" tabindex="0"><input type="file" accept=".xls,.xlsx,.csv,.doc,.docx" multiple /></label>
						</span>
					</form>
			</div>
		</div>
	</main>
<? include "footer.php";?>	