<?
	use application\layouts\helpers\HeaderMenu;
	$menu = new HeaderMenu;

	$account = 'Вход';
	if(isset($_SESSION['auth']) && $_SESSION['auth'] !== null):
	$account = 'Кабинет';
	endif;
?>

<header id="header" class="">
	<div class="header-top">
		<div class="logo">
			<a href="/">
				<img src="/public/images/icons/asarlogo.png" alt="">
			</a>
		</div>
		<div class="header-contact-list">
			<div class="contact-list">
				<p class="contact-icon">
					<img src="/public/images/icons/letter.png" alt="">
				</p>
				<p class="contact-list-info">
					e-mail:
					<span>info@asarkazyna.kz</span>
				</p>
			</div>
			<div class="contact-list">
				<p class="contact-icon">
					<img src="/public/images/icons/phone.png" alt="">
				</p>
				<p class="contact-list-info">
					Телефон:
					<span>8 778 238 6161 / 8 702 937 5655</span>
				</p>
			</div>
			<div class="contact-list">
				<p class="contact-icon">
					<img src="/public/images/icons/location.png" alt="">
				</p>
				<p class="contact-list-info">
					Адрес:
					<span>г.Шымкент, ул.Байтурсынова 9</span>
				</p>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<nav class="menu">
			<ul class="menu-list">
				<? foreach($menu->getMenuList() as $key => $val): ?>
				<? if($val['ALIAS'] == '/'.$menu->uri): ?>
				<li><a href="<?= $val['ALIAS'] ?>" class="<?= 'menu-active' ?>"><?= $val['NAME'] ?></a></li>
				<? else: ?>
				<li><a href="<?= $val['ALIAS'] ?>"><?= $val['NAME'] ?></a></li>
				<? endif; ?>
				<? endforeach; ?>
				<li><a href="/account/login"><?= $account ?></a></li>
				<li><button class="feedback-btn" type="button">Заказать звонок</button></li>
			</ul>
			<span>&#8801;</span>
		</nav>
	</div>
</header>