

<?php 

	$linksPage = [
		"ceny" => "Цены",
		"kalkulyator-natyazhnyh-potolkov" => "Калькулятор натяжных потолков",
		"politika-konfidencialnosti" => "Политика конфиденциаьности"
	];
	$cur_url =  $_SERVER['REQUEST_URI'];
	$line = "glyancevye-natyazhnye-potolki.php";
	$regexp = "/(.php)/";
	$cur_url = preg_replace($regexp, '', $cur_url);
	$titlePage = "";
	foreach ($linksPage as $linkPage =>  $namePage) {
		if ("/".$linkPage == $cur_url) {
			$titlePage = $namePage;
		}
	}
	
 ?>
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="wrap-breadcrumps col">
						<ul itemscope itemtype="http://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/"><span  itemprop="name">Главная</span></a></li>
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="js-page" id="popp"><?php echo $titlePage; ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>




