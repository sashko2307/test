<?php 
	$siteName = "f";
    $pTitle = 'Спасибо';
    $pDes = 'Description страницы';
    $pImage = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'] .''. (isset($pImage) ? $pImage : '/img/logo.png');
    $pUrl = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];

    ob_start(); 
    $thank = "than-page"
?>

<?php include("header.php") ?>

		<style>
			.thank-page .button-block {
				margin-top: 30px;
			}
			.descr-1 {
				margin-top: 15px;
			}
		</style>


		<div class="s-header thank-page">
			<div class="container">
				<div class="row">
					<div class="section-wrap">
						<div class="h1-block">
							<h1>Спасибо за доверие!</h1>
							<div class="descr-1">
								<p>Мы перезвоним вам в ближайшее время</p>
							</div>
							<div class="button-block">
								<a href="/" class="button">Вернуться на сайт</a>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
		
	

	


	<?php include("footer.php") ?>
