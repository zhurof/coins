<aside class="account__sidebar">
	<div class="account__status offline">Не подключён</div>
	<ul class="account__menu">
		<li><a href="connect.php">Подключение</a></li>
		<li><a href="settings.php">Общая информация</a></li>
		<li><a href="price-list.php">Прайс-лист</a></li>
		<li><a href="stat.php">Статистика</a></li>
	</ul>
	<!-- Добавление класса активному пункту меню. Для демонстрации! Реализовать на backend -->
	<script>
		document.querySelectorAll('.account__menu a').forEach(function(el){
			if(el.pathname == location.pathname){
				el.parentElement.classList.add('active');
			}
		})
	</script>
</aside>