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
					<label class="auth__item">
						<span class="auth__label">Пароль</span>
						<input type="password" class="auth__input">
					</label>
					<div class="auth__inner">
						<p><a href="#">не помню пароль</a></p>
						<button class="btn btn--block auth__btn">Вход</button>
					</div>
				</form>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	