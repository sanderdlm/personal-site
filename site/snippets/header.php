<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">
	<meta name="keywords" content="<?= $site->keywords()->html() ?>">

	<meta property="og:title" content="<?= $site->seo_title()->html() ?>" />
	<meta property="og:site_name" content="<?= $site->seo_site_name()->html() ?>">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?= $site->seo_description()->html() ?>" />
	<meta property="og:url" content="https://sanderdlm.be" />
	<meta property="og:image" content="<?= $site->seo_image()->html() ?>" /> 

	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<?= css('assets/css/style.css') ?>
	
	<link rel="icon" href="<?php echo url('assets/images/favicon.ico') ?>" />
	
</head>
<body>