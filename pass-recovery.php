<?php	include "header.php";?>		
	<main>
		<div class="auth">
			<div class="container">					
				<form action="" class="auth__form">
					<h1 class="auth__title">Вход</h1>
					<label class="auth__item">
						<span class="auth__label">Логин</span>
						<input type="email" class="auth__input" placeholder="e-mail">
					</label>
					<div class="auth__inner">
						<button class="btn btn--block auth__btn" disabled>Отправить</button>
						<div class="auth__note">Пароль выслан на указанный e-mail</div>
					</div>
				</form>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	