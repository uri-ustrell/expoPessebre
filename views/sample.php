<?php 

	//pagina actual
	$pag = isset($_GET['pagina']) ? $_GET['pagina'] : 0;
	//total pagines
		//li resto 3 -> (/. i /.. no compten i el count compta des de 1, no des de 0)
	$pag_max = count((scandir('./models/'. $_GET['r'] . '/' . $_COOKIE['idioma'] . '/'))) -3;

	$pag = ($pag > $pag_max) ? $pag_max : $pag;

	//paginació
	$pag_b = ($pag == 0) ? 0 : $pag-1;
	$pag_f = ($pag == $pag_max) ? $pag_max : $pag+1;

	$start = $_GET['r'] . '&pagina=0';
	$current = $_GET['r'] . '&pagina=' . $pag;
	$back = $_GET['r'] . '&pagina=' . $pag_b;
	$forward = $_GET['r'] . '&pagina=' . $pag_f;

	$opacity_forward = ($pag == $pag_max) ? 0.3 : 1;
	$opacity_back = ($pag == 0) ? 0.3 : 1;

	//idioma
	if ( isset($_GET['idioma']) ){
		setcookie('idioma', $_GET['idioma'], time()+3600);
		header("Location: /expo2018/$current");
	}  
	if ( !isset($_COOKIE['idioma']) ){
		setcookie('idioma','ca', time()+3600);
		header("Location: /expo2018/$current");
	}  

	$lang = $_COOKIE['idioma'];

	$ca = $current . '&idioma=ca';
	$es = $current . '&idioma=es';
	$fr = $current . '&idioma=fr';
	$en = $current . '&idioma=en';

	$opacity_ca = ($_COOKIE['idioma'] == 'ca') ? 1 : 0.6;
	$opacity_es = ($_COOKIE['idioma'] == 'es') ? 1 : 0.6;
	$opacity_fr = ($_COOKIE['idioma'] == 'fr') ? 1 : 0.6;
	$opacity_en = ($_COOKIE['idioma'] == 'en') ? 1 : 0.6;
	
	//link al contingut
	$url = './models/'. $_GET['r'] .'/'. $lang .'/'. $pag .'.png';

	//$url = "http://placehold.it/1280x620/fff/333.png?text=placeholder";
?>

<div class="contingut" style="background-image: url('<?= $url; ?>')"></div>

<div class="arrows">
	<a href="<?= $back; ?>" style="opacity: <?= $opacity_back; ?>;">
		<img src="./assets/img/back.png" alt="retrocedir">
	</a>
	<div class="inici_btn"><a href="<?= $start; ?>"><img src="./assets/img/inici.png" alt="inici"></a></div>
	<div class="idioma">
		<a href="<?= $ca; ?>"><img style="opacity: <?= $opacity_ca; ?>;" class="flags" src="./assets/img/ca.png" alt="català"></a>
		<a href="<?= $es; ?>"><img style="opacity: <?= $opacity_es; ?>;" class="flags" src="./assets/img/es.png" alt="castellà"></a>
		<a href="<?= $fr; ?>"><img style="opacity: <?= $opacity_fr; ?>;" class="flags" src="./assets/img/fr.png" alt="francès"></a>
		<a href="<?= $en; ?>"><img style="opacity: <?= $opacity_en; ?>;" class="flags" src="./assets/img/en.png" alt="anglès"></a>
	</div>
	<div class="pag_info"><img src="./assets/img/pag_<?= $pag; ?>.png" alt=""></div>
	<a href="<?= $forward; ?>" style="opacity: <?= $opacity_forward; ?>;">
		<img src="./assets/img/forward.png" alt="avançar">
	</a>
</div>
