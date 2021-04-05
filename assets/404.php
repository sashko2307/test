<?php 
	$siteName = "f";
    $pTitle = '404';
    $pDes = 'Description страницы';
    $pImage = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'] .''. (isset($pImage) ? $pImage : '/img/logo.png');
    $pUrl = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];

     $bodyClass="nohome";
    
?>

<?php include("header.php") ?>

<style>
	.h1-block {
    text-align: center;
    min-height: 80vh;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -o-flex-direction: column;
    flex-direction: column;
    -ms-align-items: center;
    align-items: center;
    justify-content: center;
}
.descr-1 {
    font-size: 30px;
    margin: 30px 0;
}
</style>


	<main>

		
		<section class="">
			<div class="container">
				<div class="row">
					<div class="section-wrap">
						<div class="h1-block">
							<h1>Ошибка 404</h1>
							<div class="descr-1">
								<p>Такой страницы не существует</p>
							</div>
							<div class="button-block">
								<a href="index.php" class="button">Вернуться на сайт</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		

	</main>

	<?php include("footer.php") ?>
	
