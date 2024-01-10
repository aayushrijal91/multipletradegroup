<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://multipletradegroup.com/roofing-sydney/">
	<meta property="og:title" content="<?= $site ?> - Looking for a roofing company that puts quality and customer satisfaction first? Look no further than MTG Roofing. Our team of experts are passionate about roofing, and we're dedicated to making a difference one roof at a time.">
	<meta property="og:description" content="<?= $site ?>">
	<meta property="og:image" content="https://multipletradegroup.com/roofing-sydney/assets/images/desktop.jpg">
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NZP6N84B');
	</script>
	<!-- End Google Tag Manager -->

	<script async src="https://trkcall.com/scripts/96542.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZP6N84B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->