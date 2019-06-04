<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?= $metaDesc ?>">
	<meta name="keywords" content="<?= $metaKey ?>">
	<meta name="yandex-verification" content="f0c8f325c7c6cfb5" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="/public/style/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Andika" rel="stylesheet">
	<link rel="shortcut icon" href="/public/images/icons/favicon.png" type="image/x-icon">
	<script type="text/javascript" src="/public/style/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="/public/style/js/popup.js"></script>
	<script type="text/javascript" src="/public/style/js/app.js"></script>
	<script type="text/javascript" src="/public/style/js/mail.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(53523754, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/53523754" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	<? include 'application/widgets/header.php' ?>
	<main>
		<div id="wrapper">
			<?= $content ?>
		</div>
	</main>
	<? include 'application/widgets/footer.php' ?>
	<? include 'application/components/popup-form/popup-form.php' ?>
	<? include 'application/components/calculator/calc_module.php' ?>
	<!-- BEGIN JIVOSITE CODE {literal} -->
	<script type='text/javascript'>
		(function(){ var widget_id = 'oVudvvAdmH';var d=document;var w=window;function l(){
		  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
		  s.src = '//code3.jivosite.com/script/widget/'+widget_id
			; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
		  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
		  else{w.addEventListener('load',l,false);}}})();
	</script>
	<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>