

<?php 

	$linksPage = [
		"glyancevye-natyazhnye-potolki" => "Матовые натяжные потолки",
		"satinovye-natyazhnye-potolki" => "Сатиновые натяжные потолки",
		"belye-natyazhnye-potolki" => "Белые натяжные потолки",
		"paryashchie-natyazhnye-potolki" => "Парящие натяжные потолки",
		"reznye-natyazhnye-potolki" => "Резные натяжные потолки",
		"potolki-s-fotopechatyu" => "Натяжные потолки с фотопечатью",
		"dvuhurovnevye-natyazhnye-potolki" => "Двухуровневый натяжной потолок",
		"natyazhnye-potolki-c-podsvetkoj" => "Натяжные потолки с подсветкой",
		"natyazhnye-potolki-v-zal" => "Натяжные потолки в зал",
		"natyazhnye-potolki-v-detskuyu" => "Натяжные потолки в детскую",
		"natyazhnye-potolki-v-kuhnyu" => "Натяжные потолки в кухню",
		"natyazhnye-potolki-v-spalnyu" => "Натяжные потолки в спальню",
		"natyazhnye-potolki-v-vannuyu" => "Натяжные потолки в ванную",
		"akcii" => "Акции",
		"ceny" => "Цены",
		"kalkulyator-natyazhnyh-potolkov" => "Калькулятор натяжных потолков",
		"foto" => "Фото",
		"kontakty" => "Контакты",
		"o-kompanii" => "О компании",
		"politika-konfidencialnosti" => "Политика конфиденциаьности"
	];
	$cur_url =  $_SERVER['REQUEST_URI'];
	$line = "glyancevye-natyazhnye-potolki.php";
	$regexp = "/(.php)/";
	$cur_url = preg_replace($regexp, '', $cur_url);
	echo $cur_url . "00000000000000000000";
	$titlePage = "";
	foreach ($linksPage as $linkPage =>  $namePage) {
		if ("/".$linkPage == $cur_url) {
			$titlePage = $namePage;
		}
		//echo $linkPage;
		//echo $titlePage;
	}
	
 ?>
<div class="breadcrumbs">
			<div class="wrap-breadcrumps wrap-padd">
				
				<ul itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/"><span  itemprop="name">Главная</span></a></li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name" class="js-page" id="popp"><?php echo $titlePage; ?></span></li>
				</ul>
			</div>
		</div>




