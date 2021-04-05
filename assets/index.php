<?php 
	$siteName = "f";
    $pTitle = 'Title страницы';
    $pDes = 'Description страницы';
    $pImage = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'] .''. (isset($pImage) ? $pImage : '/img/logo.png');
    $pUrl = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];

     $bodyClass="ishome";
    
?>

<?php include("header.php") ?>



	<main>

	
		
		<section class="s-header">
			<div class="container">
				<div class="row">
					<div class="section-wrap">
						<div class="h1-block">
							<h1>РЕМОНТ И МОНТАЖ КЛИМАТИЧЕСКИХ СИСТЕМ</h1>
							<div class="descr">
								<p>Гарантийное сервисное обслуживание в течение 1 года БЕСПЛАТНО</p>
							</div>
							<div class="button-block">
								<a href="#form-1" data-title="Оставить заявку на расчет" class="button popup">Оставить заявку на расчет</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
<section class="s-contacts s-section">
			<div class="container">
				<div class="row">
					<div class="section-wrap">
						
						<div class="wrap-items">

							<div class="item item-map col wow fadeInUp">
								<div class="map"
                                    data-map='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2004.771901176763!2d29.87276081600175!3d59.83632008183909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46964088bfffffff%3A0xdb41241f707207ab!2z0JvQlNCcINCh0YLQsNC70Yw!5e0!3m2!1sru!2sua!4v1602619239410!5m2!1sru!2sua"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'>
                                </div>
							</div>

							<div class="item item-ct col wow fadeInUp">
								<div class="h2-block">
									<h2>Контакты</h2>
									<div class="descr">
										<p>Ждем вас в нашем офисе</p>
									</div>
									<div class="schedule">
										<p>Мы работаем ежедневно с 9:00 до 18:00</p>
									</div>
									<div class="ct-block flex">
										<div class="phone">
											<a href="tel:+78125652417"><img data-src="img/phone.svg" src="img/lazzy.webp" class="lazyload"  alt="pic">+7 (812) 565-24-17</a>
										</div>
										<div class="phone mail">
											<a href="mailto:potolki-ds@mail.ru"><img data-src="img/mail.svg" src="img/lazzy.webp" class="lazyload"  alt="pic">potolki-ds@mail.ru</a>
										</div>
									</div>
									<div class="button-block">
										<a href="#form-1" data-title="Заказать замер" class="button popup">Заказать замер</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		

	</main>

	<?php include("footer.php") ?>
	
