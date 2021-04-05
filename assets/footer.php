	<footer>
		<div class="container">
			<div class="row">
				<div class="section-wrap">
					
				</div>
			</div>
		</div>
	</footer>



	<div class="hidden">
		
		<form id="form-1" class="form-popup form-temp">
			<input type="hidden" name="Место" class="place-form" value="">
			<input class="js-page" type="hidden" name="Страница" value="<?php echo $pUrl; ?>">

	 		<input type="hidden" name="utm_source" value="<?php echo $_GET["utm_source"]; ?>">
			<input type="hidden" name="utm_campaign" value="<?php echo $_GET["utm_campaign"]; ?>">
			<input type="hidden" name="utm_content" value="<?php echo $_GET["utm_content"]; ?>">
			<input type="hidden" name="utm_medium" value="<?php echo $_GET["utm_medium"]; ?>">
			<input type="hidden" name="utm_term" value="<?php echo $_GET["utm_term"]; ?>">
			<div class="wrap-form">
				<div class="form-title">
					<p>Форма обратной связи</p>
				</div>


				<div class="form-item">
					<label class="label-name">
						<span></span>
						<input type="text" class="filling" name="Имя" placeholder="Имя" />
						<span class="error">Введите имя</span>
					</label>
					<label>
						<span></span>
						<input type="text" class="mask-phone filling" name="Телефон" placeholder="Телефон"/>
						<span class="error">Введите телефон</span>
					</label>
					<div class="button-block">
						<button type="submit" class="button-form">Отправить</button>
					</div>
					<div class="check-block">
						<label class="">
							<input class="js-check" type="checkbox" name="Политика" value="Согласен" checked>
							<span>Нажимая эту кнопку Вы соглашаетесь с <a href="#">политикой обработки персональных данных</a></span>
						</label>
					</div>
				</div>

			</div>
		</form>


		<div id="thanks" class="form-popup">
			<div class="wrap-form">
				
				<div class="form-title">
					<p>Спасибо за доверие!</p>
				</div>

				<div class="form-item">
					<p>Мы вам перезвоним через час</p>
				</div>

			</div>
		</div>

	</div>
	
	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>
	<script src="js/common.js"></script>

</body>
</html>