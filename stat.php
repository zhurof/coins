<? $remove_menu = true; ?>
<? include "header.php";?>
	<main class="account">
		<? include "sidebar.php";?>
		<div class="account__main">
			<form action="" class="account__body">
				<div class="account__container">
					<div class="account__head account__head--wide">
						<h1 class="account__page-title">Клики и показы</h1>
						<div class="account__links">
							<a href="text-page.php">Помощь</a>
						</div>
					</div>
					<div class="stat">
						<div class="stat__head">
							<div class="stat__field">
								<span class="stat__label">Период</span>
								<input type="text" class="stat__input date-field">
							</div>
							<div class="stat__field">
								<span class="stat__label">Детализация</span>
								<div class="radio-group">
									<label class="radio-group__item">
										<input type="radio" name="detalization" value="day" class="radio-group__input">
										<span class="radio-group__btn">День</span>
									</label>
									<label class="radio-group__item">
										<input type="radio" name="detalization" value="week" class="radio-group__input">
										<span class="radio-group__btn">Неделя</span>
									</label>
									<label class="radio-group__item">
										<input type="radio" name="detalization" value="Month" checked class="radio-group__input">
										<span class="radio-group__btn">Месяц</span>
									</label>
								</div>
							</div>
							<a href="css/style.css" class="btn stat__btn" download>Получить файл</a>
						</div>
						<div class="stat__body table-wrapper">
							<table class="stat__table">
								<thead>
									<tr>
										<th>Дата</th>
										<th>Каталожный номер</th>
										<th>Название</th>
										<th>Кол-во заявок</th>
										<th>Показы товара</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11.08.2019</td>
										<td>5111-0178</td>
										<td>Георгий Победоносец</td>
										<td>5</td>
										<td>30</td>
									</tr>
									<tr>
										<td>12.08.2019</td>
										<td>5110-0157</td>
										<td>Писатель В.В. Бианки, к aaа</td>
										<td>80</td>
										<td>421</td>
									</tr>
									<tr>
										<td>13.08.2019</td>
										<td>5110-0160</td>
										<td>Белуга</td>
										<td>17</td>
										<td>2086</td>
									</tr>
									<tr>
										<td>14.08.2019</td>
										<td>5111-0406</td>
										<td>Бременские музыканты</td>
										<td>22</td>
										<td>93</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</form>
		</div>
	</main>
<? include "footer.php";?>	